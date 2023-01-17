<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Log;

class HomeController extends Controller
{
    public function IndexGetHandler()
    {
        return redirect('/hello');
    }

    public function TemplateGetHandler()
    {
//        error_log("***************" . Config::get('visit'));
/*
        error_log('error_log:: Some message here. ');
        
        Log::info('This is some useful information.');
 
        Log::warning('Something could be going wrong.');
 
        Log::error('Something is really going wrong.');
*/

        $date = new DateTime();

        $timestamp = $date->getTimestamp();

        return view('index', [
            'title' => "Template",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "active",
            'route' => "",
            'fileupload' => "",
            'http' => "",
            'restapi' => "",
            'login' => "",
            'dashboard' => "",
            'websocket' => "",
            'content' => "Hello World ...",
            'object' => json_decode('{"user":"user001", "msg":"msg001"}'),
            'timestamp' => $timestamp,
            'timestamp_odd' => $timestamp % 2 == 1,
            'users' => ["user1", "user2", "user3"]
         ]);
    }

    public function RouteDefaultGetHandler()
    {
        $data = [
            'title' => "Route",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "active",
            'fileupload' => "",
            'http' => "",
            'restapi' => "",
            'login' => "",
            'dashboard' => "",
            'websocket' => "",
            "name" =>    "",
            "action" =>  "",
            "act1" =>    "active",
            "act2" =>    "",
            "act3" =>    "",
            "act4" =>    "",
            "act5" =>    "",
            "message" => "This is default route",
            "content"   => ""
         ];

        return view('route', $data);
    }

    public function RouteGetHandler($name, $action = "act1")
    {
//        $name := c.Param("name")
//        $action := c.Param("action")

        $message = $name . " is " . $action;

        $data = [
            'title' => "Route",
            'username' => NULL,
            'noneuser' => NULL,
            'template' => "",
            'route' => "active",
            'fileupload' => "",
            'http' => "",
            'restapi' => "",
            'login' => "",
            'dashboard' => "",
            'websocket' => "",
            "name" =>    $name,
            "action" =>  $action,
            "act1" =>    "",
            "act2" =>    "",
            "act3" =>    "",
            "act4" =>    "",
            "act5" =>    "",
            "message" => $message,
            "content" => ""
         ];

         $data[$action] = "active";

        return view('route', $data);
    }
}
