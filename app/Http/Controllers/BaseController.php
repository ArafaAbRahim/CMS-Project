<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        $home = Page::where('page_title', 'home')->get();
        return view('home', ['home' => $home]);
    }

    public function services()
    {
        return view('services');
    }

    public function company()
    {
        return view('company');
    }

    public function contact_us()
    {
        return view('contact');
    }
}
