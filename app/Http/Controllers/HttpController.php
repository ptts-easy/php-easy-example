<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class HttpController extends Controller
{
    // "/http"
    public function HTTPHandler()
    {
        $data = [
            'title' => "HTTP",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "",
            'fileupload' => "",
            'http' => "active",
            'restapi' => "",
            'login' => "",
            'dashboard' => "",
            'websocket' => "",
            'content' =>   ""
         ];

        return view('http', $data);
    }

    public function HTTPInfoHandler(Request $req)
    {
        $json = [
            "ip" => $req->ip(),
            "method" => $req->method(),
            "url" => $req->fullUrl(),
//            "url" => $req->url(),
            "path" => $req->path(),
            "get_param" => $req->query(),
            "post_param" => $req->post(),
            "header" => $req->header(),
            "body" => $req->getContent()
        ];

        return Response::json($json, 200);
    }
}
