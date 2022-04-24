<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/project',function(){
    return view('main-section');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/sign-up',function(){
    return view('sign-up');
});

Route::get('/sign-in',function(){
    return view('sign-in');
});

Route::get('/page-404',function(){
    return view('404page');
});

Route::resource('/students', StudentController::class);
    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
