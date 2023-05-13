<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function admin(){

        $posts = Post::all();
        
        return view('admin.admin')->with('posts', $posts);
    }

    
    public function auth(Request $request)
    {
        $auth = auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($auth) {
            return redirect()->route('maktab_admin_paneliga_kirdingiz');
        }
        return redirect()->route('admin');
    }
}


