<?php

use Illuminate\Support\Facades\Auth;
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




Auth::routes();

Route::middleware(['auth'])->group(function () {
//After Login the routes are accept by the loginUsers...
    Route::get('/home', [App\Http\Controllers\ProfileController::class,'index'])->name('admin.en.home');
    Route::get('/profile',[App\Http\Controllers\ProfileController::class,'show'])->name('admin.en.profile');
    Route::put('/profile/store/image',[App\Http\Controllers\ProfileController::class,'storeImage'])->name('store.profileImg');
    Route::get('/dashboard/employer', [App\Http\Controllers\EmployeeController::class,'index'])->name('dashboard.employer');
    Route::get('/employer/consulting', function(){
        return view('admin.administrator.consulting');
    })->name('admin.consulting');
    Route::get('/register/employee', [App\Http\Controllers\EmployeeController::class,'create'])->name('register.employee');
    Route::post('/register/employee/store', [App\Http\Controllers\EmployeeController::class,'store'])->name('register.employee.store');
    Route::get('/cart', [App\Http\Controllers\BasketController::class,'index'])->name('basket.index');
    Route::post('/cart/add/', [App\Http\Controllers\BasketController::class,'store'])->name('basket.store');
    Route::delete('/cart/delete/{basket}', [App\Http\Controllers\BasketController::class,'destroy'])->name('basket.delete');
    Route::post('/add/cart', [App\Http\Controllers\BasketController::class,'store'])->name('basket.add');
    Route::get('/orders', [App\Http\Controllers\OrderController::class,'index'])->name('order.index');
});



//Front end routes, User experience
Route::get('/', function(){return view("front.landing");})->name('home');
Route::get('/products', function(){return view("front.products");})->name('front.products');
Route::get('/team', function(){return view("front.teamTraining");})->name('front.team');
Route::get('/faq', function(){return view("front.faq");})->name('front.faq');
Route::get('/consulting', function(){return view("front.consulting");})->name('front.consulting');
Route::get('/product/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('front.product');



