<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestapiController extends Controller
{
    // "/restapi"
    public function RestApiGetHandler()
    {
        $data = [
            'title' => "RESTApi",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "",
            'fileupload' => "",
            'http' => "",
            'restapi' => "active",
            'login' => "",
            'dashboard' => "",
            'websocket' => "",
            'content' =>   ""
         ];

        return view('restapi', $data);
    }

    public function RestApiMsgHandler($name)
    {
        $realAddr = "http://" + env('SERVER_IP', 'localhost') + ":" + env('API_SERVER_PORT', 28050);
        
    }
}
