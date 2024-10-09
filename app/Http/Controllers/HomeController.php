<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function posts()
    {
        $user = auth()->user();
        $posts = $user->posts;
        return view('files.myFiles',[
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('files.show',[
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('files.create');
    }
}
