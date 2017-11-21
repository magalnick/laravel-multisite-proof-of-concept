<?php

namespace Src\Routes\Api\Core;

use Illuminate\Support\Facades\Route;
use Src\Routes\RouteInterface;

class B implements RouteInterface
{
    public static function router() {
        Route::group( [ 'prefix' => 'v1/core/b' ], function () {
            Route::get('test', '\Src\Controllers\Core\B\TestMultisiteController@test');
        });
    }
}
