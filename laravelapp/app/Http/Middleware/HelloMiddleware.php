<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware // 何も継承していない
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) // Closureは無名クラスを扱うもの
    {
        // クロージャーでリクエストを呼び出すことで、ミドルウェアとしての役割を行うことができる
        return $next($request);
    }
}
