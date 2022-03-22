<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Client\Request;
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

//get request ==>>
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
return "hello world";
});

//controller 
// Route::get('/world','MainController@sayHi');
Route::get('/world',[MainController::class,'sayHi']);

Route::get('/home',function(){
return view('home');
});

Route::get('/home/{name}',function($name){
    return $name;
});
Route::get('/hello/{name}',function($name){
    return view("hello",[
        'nam'=>$name,
    ]);
});

Route::get('/homepage',[MainController::class,'homepage']);
Route::get('/section',[MainController::class,'section']);

//post request ==>

Route::post('/say',function(Request $request){ //pass post value in request;
    $newName= $request->post('name'); //get post value in request middleware;
    echo "Hello {$newName} ";
});

//db query router

Route::get('/people',[MainController::class,'allpeople']);
Route::get('/peoples',[MainController::class,'allpeoples']);