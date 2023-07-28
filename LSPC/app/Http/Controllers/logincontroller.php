<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class logincontroller extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

        $email    = $request->email;
        $password = $request->password;
        
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('home/page');
        }
        return redirect('form/login/view/new')->with('error','Wrong Password or Username');
    }
}
