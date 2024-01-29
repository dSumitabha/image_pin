<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;


class savepost extends Controller
{
    function getData(Request $request){
        $validatedData = $request->validate([
            'new_image' => 'required|image|max:5120',
            'caption' => 'required|string|max:100', 
            'creator' => 'required|string|max:16',
        ]);
        
        $image_path = $request->file('new_image')->storeAs('public/images', $request->file('new_image')->getClientOriginalName());

        $post = new Post;
        $post->image_path = $image_path;
        $post->caption = $validatedData['caption'];
        $post->creator = $validatedData['creator'];
        $post->likes = rand(10,100);
        $post->rating = rand(10,100);
        $post->save();

        return "You have posted successfully. <a href='/'>Go to Home Page</a> ";

    }
}
