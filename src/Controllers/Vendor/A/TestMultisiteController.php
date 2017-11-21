<?php

namespace Src\Controllers\Vendor\A;

use App\Http\Controllers\Controller;

class TestMultisiteController extends Controller
{
    public function test() {
        return "Route::get(/api/v1/vendor/a/test);";
    }
}
