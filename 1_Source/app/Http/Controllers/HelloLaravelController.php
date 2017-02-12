<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloLaravelController extends Controller
{
    //
    public function welcome() {
        return view('welcome');
    }

}
