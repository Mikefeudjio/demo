<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        Mail::to('test@mail.test')->send(new TestMail());

        return view('testDemo.bar');
    }
}
