<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(){
        return view('register');

    }
    public function welcome(request $request){
        return view ('welcome',[
            'firstname' => $request->input('firstname'),
            'firstname' => $request->input('firstname'),
            'gender' => $request->input('gender')
        ]);
    }
}
