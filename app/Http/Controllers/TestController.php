<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function test()
    {
        $test = new Test();
        die('3');
    }
}
