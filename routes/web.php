<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo "ok";
    //return view('welcome');
});



 Route::get('/userdata', function () 
 {
    return view('UserData');
});

Route::get('/register', [UserRegisterControllerResource::class,'index']);

// Route::get('/register', [UserRegisterControllerResource::class,'store']);

