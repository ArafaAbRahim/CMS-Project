<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        
    }

    public function company()
    {
        return "hellow";
    }

    public function contact_us()
    {
        
    }
}