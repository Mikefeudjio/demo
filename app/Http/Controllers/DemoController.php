<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    
    public function fou()
    {
        return view('testDemo.fou');
    }
    public function bar()
    {
        return view('testDemo.bar');
    }
}
