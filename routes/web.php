<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/view_catagory', [AdminController::class, 'view_catagory']);

route::post('/add_catagory', [AdminController::class, 'add_catagory']);
route::get('/delate_catagory/{id}', [AdminController::class, 'delate_catagory']);

route::get('/view_product', [AdminController::class, 'view_product']);
route::post('/add_product', [AdminController::class, 'add_product']);

route::get('/show_product', [AdminController::class, 'show_product'])->name('show_product');
route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);
route::post('/updata_product_form/{id}', [AdminController::class, 'updata_product_form']);

route::get('/product_details/{id}', [HomeController::class, 'product_details']);
route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

route::get('/show_cart', [HomeController::class, 'show_cart']);
route::get('/delete_cart/{id}', [HomeController::class, 'delete_cart']);

route::get('/cach_order', [HomeController::class, 'cach_order']);
route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);

route::post('/stripe/{pp}}', [HomeController::class, 'stripePost'])->name('stripe_post');
route::get('/order', [AdminController::class, 'order']);

route::get('/delivered/{id}', [AdminController::class, 'delivered']);
route::get('/show_order', [HomeController::class, 'show_order']);

route::get('/cansol_order/{id}', [HomeController::class, 'cansol_order']);
