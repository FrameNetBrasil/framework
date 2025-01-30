<?php

namespace FrameNetBrasil\Framework\Http\Middleware;

use FrameNetBrasil\Framework\Exceptions\AuthenticateException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Closure;

class Authenticate
{
    public function handle(Request $request, Closure $next): Response
    {
        $this->authenticate($request);
        return $next($request);
    }
    protected function authenticate($request)
    {
        if (!is_null(session('user'))) {
            return true;
        }
        $this->unauthenticated($request);
    }

    protected function unauthenticated($request)
    {
        throw new AuthenticateException('User is not authenticated. Please, login to access this page.', 401);
    }
}
