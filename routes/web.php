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
    Route::get('/cart/get', [App\Http\Controllers\BasketController::class,'getCartItems'])->name('basket.get');
    Route::post('/cart/add/', [App\Http\Controllers\BasketController::class,'store'])->name('basket.store');
    Route::delete('/cart/delete/{item}', [App\Http\Controllers\BasketController::class,'destroy'])->name('basket.delete');
    Route::post('/add/cart', [App\Http\Controllers\BasketController::class,'store'])->name('basket.add');
    Route::put('/cart/update/{item}', [App\Http\Controllers\BasketController::class,'update'])->name('update.cart');
    Route::post('/cart/add/discount', [App\Http\Controllers\BasketController::class,'applyDiscount'])->name('add.discount');
    Route::post('/cart/clear/discount', [App\Http\Controllers\BasketController::class,'removeDiscount'])->name('remove.discount');

    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class,'index'])->name('checkout.index');
    Route::post('/checkout/store', [App\Http\Controllers\CheckoutController::class,'store'])->name('checkout.store');

    Route::get('/orders', [App\Http\Controllers\OrderController::class,'index'])->name('order.index');
    Route::post('/order/items', [App\Http\Controllers\OrderController::class,'store'])->name('order.store');
    Route::get('/invoice/{id}',[App\Http\Controllers\InvoiceController::class,'download'])->name('invoice.download');
    Route::delete('/orders/delete/{id}', [App\Http\Controllers\OrderController::class,'destroy'])->name('order.delete');

    Route::get('/error', function () {
        return view('admin.administrator.error');
    })->name('error');
});



//Front end routes, User experience
Route::get('/', function(){return view("front.landing");})->name('home');
Route::get('/products', function(){return view("front.products");})->name('front.products');
Route::get('/team', function(){return view("front.teamTraining");})->name('front.team');
Route::get('/faq', function(){return view("front.faq");})->name('front.faq');
Route::get('/consulting', function(){return view("front.consulting");})->name('front.consulting');
Route::get('/product/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('front.product');



