<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User_credential;

class usersignup extends Controller
{
    function getData(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|unique:user_credentials',
            'password' => 'required|min:4',
        ]);


        $user = new User_credential;
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return "You have signed up successfully. <a href='/'>Go to Home Page</a> ";
    }
}
