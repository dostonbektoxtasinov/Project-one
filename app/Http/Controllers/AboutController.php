<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   
    public function index()
    {
        $abouts = About::all();

        return view('admin.admin.about.index')->with('abouts', $abouts);
    }
    public function create()
    {
        return view('admin.admin.about.create');
    }   
    public function store(AboutRequest $about)
    {
        $about = About::create([
            'name' => $about->name, 
            'number' => $about->number, 
        ]);
        

        return redirect()->route('about.index'); 
    }
    public function edit(About $about)
    {
        return view('admin.admin.about.edit')->with(['about' => $about]);
    }
    public function update(AboutRequest $request, About $about)
    {
        $about->update([
            'name' => $request->name, 
            'number' => $request->number, 
        ]);
        

        return redirect()->route('about.index', ['About', $about->id]); 
    }
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('about.index');

    }
}
