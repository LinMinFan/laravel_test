<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/f1', function () {
    return view('f1');
});
Route::get('/f2', function () {
    return view('f2');
});
Route::get('/f3', function () {
    //$x=['1','2','3','4','5'];
    //dd($x);
    $y="123";
    echo $y;
    return view('f3');
});
Route::get('/123', function () {
    //$x=['1','2','3','4','5'];
    //dd($x);
    $y="456";
    echo $y;
    return view('f4');
});
