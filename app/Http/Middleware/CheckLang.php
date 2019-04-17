<?php

namespace App\Http\Middleware;

use Closure;

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
        $segment = $request->segment(1);

        if (in_array($segment, config('app.locales'))) {
            \App::setLocale($segment);
            \URL::defaults([
                'lang' => $segment,
            ]);
            return $next($request);
        }

        abort(404,'Need language!');
    }
}
