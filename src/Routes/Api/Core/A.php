<?php

namespace Src\Routes\Api\Core;

use Illuminate\Support\Facades\Route;
use Src\Routes\RouteInterface;

class A implements RouteInterface
{
    public static function router() {
        Route::group( [ 'prefix' => 'v1/core/a' ], function () {
            Route::get('test', '\Src\Controllers\Core\A\TestMultisiteController@test');
        });
    }
}
