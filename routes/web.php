<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;

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

Route::get('/block-settings',[BlockController::class,'index'])->name('home.page.settings');

Route::get('/block-settings/header',[HeaderController::class,'index'])->name('header.settings');

//DISCOUT BLOCK ROUTES
Route::get('/block-settings/discount',[DiscountController::class,'index'])->name('discount.settings');
Route::post('/block-settings/discount',[DiscountController::class,'index'])->name('discountPost.settings');
Route::get('/block-settings/discount-offer-list',[DiscountController::class,'show'])->name('show.DiscountOffer');
Route::get('/block-settings/add-discount-offer',[DiscountController::class,'add'])->name('add.DiscountOffer');
Route::post('/block-settings/add-discount-offer',[DiscountController::class,'add'])->name('addPost.DiscountOffer');
Route::post('/block-settings/update-discount-offer',[DiscountController::class,'update'])->name('update.DiscountOffer');
Route::get('/block-settings/delete-discount-offer/{id}',[DiscountController::class,'delete'])->name('delete.DiscountOffer');

Route::get('/block-settings/menu',[MenuController::class,'index'])->name('menu.settings');
Route::get('/block-settings/about-us',[AboutUsController::class,'index'])->name('about-us.settings');
Route::get('/block-settings/contact-us',[ContactUsController::class,'index'])->name('contact-us.settings');
Route::get('/block-settings/testimonial',[TestimonialController::class,'index'])->name('contact-us.settings');
Route::get('/block-settings/footer',[FooterController::class,'index'])->name('contact-us.settings');


Route::post('/update-block-status',[BlockController::class,'index'])->name('update_block.status');
// Route::get('/block-settings/{slug}',[BlockController::class,'settings'])->name('header_page.settings');
Route::post('/block-settings/save-settings',[BlockController::class,'SaveSettings'])->name('save.settings');
Route::post('/product-image',[DiscountController::class,'UploadImage'])->name('upload.productImage');

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
Route::get('/', [FrontController::class,'index']);

Route::get('/barnala-hub/about-us', function () {
    return view('front-end.about-us');
});

Route::get('/barnala-hub/menu', function () {
    return view('front-end.menu');
});

Route::get('/barnala-hub/book-table', function () {
    return view('front-end.book-table');
});

