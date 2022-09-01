<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BikeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});

//Route::get('/student/{name}/{num}',function($name,$num){
//    return "<h1>"."Name=".$name."<br>"."Num=".$num."</h1>";
//});


Route::prefix('api')->group(function () {
    Route::resource('bikes', BikeController::class);
});

Route::get('/',[StudentController::class,'index']);
Route::get('/student/{name}/{num}',[StudentController::class,'getByUrl']);


