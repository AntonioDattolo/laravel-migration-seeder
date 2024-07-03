<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainController extends Controller
{
    public function home(){
        $data= [
            "dato" => "x"
        ];
        return view("home",$data);
    }
}
