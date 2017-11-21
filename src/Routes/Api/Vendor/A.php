<?php

namespace Src\Routes\Api\Vendor;

use Illuminate\Support\Facades\Route;
use Src\Routes\RouteInterface;

class A implements RouteInterface
{
    public static function router() {
        Route::group( [ 'prefix' => 'v1/vendor/a' ], function () {
            Route::get('test', '\Src\Controllers\Vendor\A\TestMultisiteController@test');
        });
    }
}
