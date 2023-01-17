<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function LoginGetHandler()
    {
        $data = [
            'title' => "Login",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "",
            'fileupload' => "",
            'http' => "",
            'restapi' => "",
            'login' => "active",
            'dashboard' => "",
            'websocket' => "",
            'content' => ""
         ];

        $user = Auth::user();

        if ($user != NULL)
        {
            $data["username"] = $user->name;
            $data["content"] = "Please logout first";
        }

        return view('login', $data);
    }

    public function LoginPostHandler(Request $req)
    {
        $data = [
            'title' => "Login",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "",
            'fileupload' => "",
            'http' => "",
            'restapi' => "",
            'login' => "active",
            'dashboard' => "",
            'websocket' => "",
            'content' => ""
         ];

        $user = Auth::user();
        $userid = Auth::id();

        if (Auth::check()) {
            $data["username"] = $user->name;
            $data["content"] = "Please logout first";

            return view('login', $data);
        }

        $credentials = $req->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
//            return redirect('/dashboard');            
        }
    }

    public function LogoutGetHandler()
    {
        Auth::logout();

        return redirect('/login');
    }    
}
