<?php

namespace Src\Routes\Api\Core;

use Illuminate\Support\Facades\Route;
use Src\Routes\RouteInterface;

class Shared implements RouteInterface
{
    public static function router() {
        Route::group( [ 'prefix' => 'v1/core/shared' ], function () {
            Route::get('test', '\Src\Controllers\Core\Shared\TestMultisiteController@test');
        });
    }
}
