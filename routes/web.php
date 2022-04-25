<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\homePageSettingsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/project',function(){
    return view('main-section');
});

Route::get('/home-page-settings',[homePageSettingsController::class,'index'])->name('home.page.settings');
Route::get('/settings',[homePageSettingsController::class,'settings'])->name('header_page.settings');

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


//FRONTEND ROUTES
Route::get('/', function () {
    return view('front-end.index');
});

Route::get('/barnala-hub/about-us', function () {
    return view('front-end.about-us');
});

Route::get('/barnala-hub/menu', function () {
    return view('front-end.menu');
});

Route::get('/barnala-hub/book-table', function () {
    return view('front-end.book-table');
});

