<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function fou()
    {
        return view('testDemo.fou');
    }
    public function bar()
    {
        return view('testDemo.bar');
    }
}
