<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;


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

// REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// MAIN-DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::resource('/dashboard/product', DashboardProductController::class)->middleware('auth');

// FRONT-END
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/petani', function () {
    return view('petani', [
        "title" => "Petani"
    ]);
});

Route::get('/mentor', function () {
    return view('mentor', [
        "title" => "Mentor"
    ]);
});

Route::get('petani/{user:username}', function(User $user){
    return view('products', [
        'title' => 'Produk Petani',
        'products' => $user -> products->load('user'),
    ]);
});