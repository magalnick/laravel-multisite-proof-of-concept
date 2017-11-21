<?php

namespace Src\Routes\Api\Vendor;

use Illuminate\Support\Facades\Route;
use Src\Routes\RouteInterface;

class Shared implements RouteInterface
{
    public static function router() {
        Route::group( [ 'prefix' => 'v1/vendor/shared' ], function () {
            Route::get('test', '\Src\Controllers\Vendor\Shared\TestMultisiteController@test');
        });
    }
}
