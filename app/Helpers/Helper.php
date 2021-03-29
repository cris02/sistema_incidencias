<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/**
*Valida si la ruta esta activa para dar un seguimiento de su usor
*@param string $route
*@param string $class
*@return string
*/

function isRouteActive($route, $class = 'active') {
    if (Str::contains(Route::currentRouteName(), $route)) {
        return $class;
    }

    return null;
}
