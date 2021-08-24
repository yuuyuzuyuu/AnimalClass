<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

     protected $user_route = 'user.login';
     protected $admin_route = 'admin.login';
     protected $center_route = 'center.login';

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Route::is('user.*')){
                return route($this->user_route);
            } elseif (Route::is('admin.*')) {
                return route($this->admin_route);
            } elseif (Route::is('center.*')) {
                return route($this->center_route);
            }
        }
    }
}
