<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileuploadController extends Controller
{
    // "/fileupload"
    public function FileuploadGetHandler()
    {
        $data = [
            'title' => "FileUpload",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "",
            'fileupload' => "active",
            'http' => "",
            'restapi' => "",
            'login' => "",
            'dashboard' => "",
            'websocket' => "",
            'content' =>   ""
         ];

        return view('fileupload', $data);
    }
}
