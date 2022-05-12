<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $segment =  $request->segment(1);

        if($segment == 'admin') {
          return route('admin-login');
          exit;  
        }
          
        if($segment == 'customer') {
          return route('customer-login');
          exit;  
        }
          
        if($segment == 'seller') {
          return route('seller-login');
          exit;  
        }

        if (! $request->expectsJson()) {
            //return route('login');
        }
    }
}
