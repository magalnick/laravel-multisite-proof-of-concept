<?php

namespace Src\Controllers\Vendor\B;

use App\Http\Controllers\Controller;

class TestMultisiteController extends Controller
{
    public function test() {
        return "Route::get(/api/v1/vendor/b/test);";
    }
}
