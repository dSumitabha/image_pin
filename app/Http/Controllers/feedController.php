<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class feedController extends Controller
{
    public function fetch(){
        $posts = Post::all(); 
        
        return view('feed', ['posts' => $posts]);
    }
}
