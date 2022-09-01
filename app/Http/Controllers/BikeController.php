<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class BikeController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->action(
            [StudentController::class, 'index']
        ); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Student::all();
        return view('bike.create',['data'=>$data]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $student = new Student;
 
        $student->name = $request->name;
        $student->chinese = $request->chinese;
        $student->english = $request->english;
        $student->math = $request->math;
 
        $student->save();
        //$data=Student::all();
        //return view('home',['data'=>$data,'result'=>$result]); 
        $result="新增成功";
        return redirect()->action(
            [StudentController::class, 'index'], ['result' => $result]
        ); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $student = Student::where('id',$id)->first();
        return view('bike.edit',['student'=>$student]);
        //dd($id,$request->input('do'),$request->input('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        Student::find($id)->update($data);
        $result="編輯完成";
        return redirect()->action(
            [StudentController::class, 'index'], ['result' => $result]
        ); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        Student::destroy($id);
        $result="刪除完成";
        return redirect()->action(
            [StudentController::class, 'index'], ['result' => $result]
        );
    }
}
