<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // return view('admin.admin')->with('posts', $posts);
    }
}
