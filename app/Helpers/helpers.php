<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('is_active_route')) {
    function is_active_route($routeNames, $activeClass = 'active', $defaultClass = '')
    {
        if (is_array($routeNames)) {
            foreach ($routeNames as $routeName) {
                if (Route::is($routeName)) {
                    return $activeClass;
                }
            }
        } elseif (Route::is($routeNames)) {
            return $activeClass;
        }
        return $defaultClass;
    }
}
