<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;



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

// Home //
Route::get('/home',[HomeController::class,'index']);

// Pages //
Route::get('/about',[PageController::class,'about']);
Route::get('/services',[PageController::class,'services']);
Route::get('/contact',[PageController::class,'contact']);

// Contact Form //
Route::post('/contact',[ContactController::class,'store'])->name('contact.form');