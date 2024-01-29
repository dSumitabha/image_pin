<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Creator_credential;

class creatorsignup extends Controller
{
    function getData(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|unique:creator_credentials',
            'password' => 'required|min:4',
        ]);


        $user = new Creator_credential;
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return "You have signed up successfully. <a href='/'>Go to Home Page</a> ";
    }
}
