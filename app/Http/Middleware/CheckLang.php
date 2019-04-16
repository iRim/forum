<?php

namespace App\Http\Middleware;

use Closure;
use App;

class CheckLang
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
        // $segment = $request->segment(1);

        // if(!empty($segment)){
        //     if($segment == config('app.locale')){
        //         $segments = $request->segments();
        //         unset($segments[0]);
        //         return redirect()->to(implode('/',$segments));
        //     }
        // } else {
        //     $segment = config('app.locale');
        // }

        // if (in_array($segment, config('app.locales'))) {
        //     App::setLocale($segment);
        //     request()->setLocale($segment);
            return $next($request);
        // }
        // abort(404,'Need language!');
    }
}
