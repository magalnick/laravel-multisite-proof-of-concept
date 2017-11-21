<?php

namespace Src\Controllers\Core\A;

use App\Http\Controllers\Controller;

class TestMultisiteController extends Controller
{
    public function test() {
        return "Route::get(/api/v1/core/a/test);";
    }
}
