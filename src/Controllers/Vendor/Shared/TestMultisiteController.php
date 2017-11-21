<?php

namespace Src\Controllers\Vendor\Shared;

use App\Http\Controllers\Controller;

class TestMultisiteController extends Controller
{
    public function test() {
        return "Route::get(/api/v1/vendor/shared/test);";
    }
}
