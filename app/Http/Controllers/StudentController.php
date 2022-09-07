<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
   public function index(){
        $data=Student::all();
        $chinese=Student::orderBy('chinese','desc')->get();
        $english=Student::orderBy('english','desc')->get();
        $math=Student::orderBy('math','desc')->get();
        //dd($data);
        return view('home',['data'=>$data,'chinese'=>$chinese,'english'=>$english,'math'=>$math]);
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


 

