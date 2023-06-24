<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        return view('home', compact('posts'));
    }

    public function post($slug)
    {
         $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('post', compact('post'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
