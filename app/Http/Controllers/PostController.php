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

   
    public function store(Request $request)
    {
        // return view('admin.admin');
    }

   
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
        
    }

   
    public function destroy(string $id)
    {
        
    }
}
