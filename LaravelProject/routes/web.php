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

Route::get('/', function (){
    return view('welcome');
});
Route::get('/2' , function(){
    return view('index');
}); 

// Example of route with parameter
Route::get('/about/{id}', function(string $id){ 
    return "<h1>Post parameter: " . $id . "</h1>";
});

