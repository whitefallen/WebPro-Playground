<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
    }

    public function handlePost(Request $request) {
        $params = $request->post();
        if(empty($params["vorname"])) {
            $params["vorname"] = "";
        }
        if(empty($params["nachname"])) {
            $params["nachname"] = "";
        }
        return view('PostView', ["vorname" => $params["vorname"], "nachname" => $params["nachname"]]);
    }
}
