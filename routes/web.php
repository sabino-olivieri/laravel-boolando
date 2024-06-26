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

    $data = config("products.products");
    
    return view("home", compact("data"));

})->name("home");

Route::get('/woman', function () {
    return view('woman');
})->name('woman');

Route::get('/man', function () {
    return view('man');
})->name('man');

Route::get('/children', function () {
    return view('children');
})->name('children');
