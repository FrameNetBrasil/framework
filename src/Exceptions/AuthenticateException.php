<?php

namespace FrameNetBrasil\Framework\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthenticateException extends Exception
{
    public function report(): void
    {
    }

    public function render(Request $request): Response
    {
        return response()->view('fw::errors.error', [
            'message' => $this->getMessage(),
            'goto' => '/',
            'gotoLabel' => 'Home'
        ]);
    }

}
