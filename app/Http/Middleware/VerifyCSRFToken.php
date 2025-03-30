<?php

namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCSRFToken extends Middleware
{
    protected $except = [
        'api/*',
    ];
}

//for api authentication: created middleware 

