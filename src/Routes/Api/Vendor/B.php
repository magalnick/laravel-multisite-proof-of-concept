<?php

namespace Src\Routes\Api\Vendor;

use Illuminate\Support\Facades\Route;
use Src\Routes\RouteInterface;

class B implements RouteInterface
{
    public static function router() {
        Route::group( [ 'prefix' => 'v1/vendor/b' ], function () {
            Route::get('test', '\Src\Controllers\Vendor\B\TestMultisiteController@test');
        });
    }
}
