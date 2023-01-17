<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{

    // "/dashboard"
    public function DashboardGetHandler()
    {
        $data = [
            'title' => "Dashboard",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "",
            'fileupload' => "",
            'http' => "",
            'restapi' => "",
            'login' => "",
            'dashboard' => "active",
            'websocket' => "",
            'content' =>   "This is a dashboard"
         ];

        $user = Auth::user();

        if ($user == NULL)
        {
            $data["noneuser"] = true;
        } else {
            $data["username"] = $user->name;
        }
        
        return view('dashboard', $data);
    }
}
