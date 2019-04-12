<?php

namespace App\Http\Middleware;

use Closure;
use App\Extensions\AdminGuard;
use App\User;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->createAdminForFirstUser($request->user());
        if ((new AdminGuard)->check()){
            return $next($request);
        }
        return redirect()->route('frontend.main');
    }

    private function createAdminForFirstUser($user){
        if(User::count() == 1 && $user->role != 'admin'){
            $user->role = 'admin';
            $user->save();
        }
    }
}
