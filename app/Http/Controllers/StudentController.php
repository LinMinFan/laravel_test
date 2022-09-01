<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
   public function index(){
        $data=Student::all();
        //dd($data);
        return view('home',['data'=>$data]);
        //foreach (Student::all() as $student) {
        //    echo $student->name."<br>";
        //    echo $student->chinese."<br>";
        //    echo $student->english."<br>";
        //    echo $student->math."<br>";
        //}
    }

    public function getByUrl(Request $request,$name,$num){
        dd([$name,$num,$request]);
    }
}


 

