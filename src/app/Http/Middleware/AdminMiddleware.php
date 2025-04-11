<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // ユーザーがログインしていて、is_admin フラグが true の場合だけ通す
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        abort(403, '管理者専用ページです');
    }
}
