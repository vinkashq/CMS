<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

class Vinkas extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vinkas';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */
    public static function auth()
    {
      Route::get('/login', 'AuthenticationController@login')->name('login');
      Route::get('/register', 'AuthenticationController@register')->name('register');
      Route::post('/logout', 'AuthenticationController@logout')->name('logout');
    }
}
