<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\Response;

class BlogUserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::get('customerId')){
            return $next($request);
        }else{
            return redirect(route('customer.login'));
        }
    }
}
