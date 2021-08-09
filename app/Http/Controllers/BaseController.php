<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        $home = Page::where('page_title', 'home')->get();
        $post = Post::where('page_title', 'home')->get();
        return view('home', ['home' => $home, 'post' => $post]);
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
