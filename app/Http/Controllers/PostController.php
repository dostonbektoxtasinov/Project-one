<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    
    public function index()
    {
      
        $posts = Post::all();
        $abouts = About::all();
        $teams = Team::all();

        return view('index')->with([
            'posts' => $posts,
            'abouts' => $abouts,
            'teams' => $teams,
        ]);
    }

    
    public function create()
    {
        return view('admin.create');
    }


}
