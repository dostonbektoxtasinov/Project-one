<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TableController extends Controller
{
    
    public function index()
    {
        $tables  = Post::all();

        return view('admin.admin.table.index')->with('tables', $tables);
    }

    
    public function create()
    {
        return view('admin.admin.table.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(Post $table)
    {
        return view('admin.admin.table.edit')->with(['table' => $table]);
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
