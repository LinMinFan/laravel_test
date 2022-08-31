<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index($url){
        return view($url);
    }

    public function getByUrl(Request $request,$name,$num){
        dd([$name,$num,$request['do']]);
    }
}
