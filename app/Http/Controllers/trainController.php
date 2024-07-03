<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class trainController extends Controller
{
    public function home(){
        $data= [
            "dato" => Train::all()
        ];
        return view("home",$data);
    }
}
