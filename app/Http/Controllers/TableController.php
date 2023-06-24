<?php

namespace App\Http\Controllers;

use App\Http\Requests\TableRequest;
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

    
    public function store(TableRequest $table)
    {
        $table = Post::create([
            'ism' => $table->ism,
            'familya' => $table->familya,
            'lavozim' => $table->lavozim,
            'stavka' => $table->stavka,
            'number' => $table->number,
        ]);

        
        return redirect()->route('table.index');
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
