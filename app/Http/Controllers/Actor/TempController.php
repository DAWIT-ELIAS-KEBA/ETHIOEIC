<?php

namespace App\Http\Controllers\Actor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TempController extends Controller
{
    function test()
    {
        return view('basic.index');
    }
}
