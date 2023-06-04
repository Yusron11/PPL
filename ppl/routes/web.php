<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\PesananPelangganController;


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

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
});


// MAIN-DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::resource('/dashboard/product', DashboardProductController::class)->middleware('cekpetani');
Route::resource('/dashboard/profil', PetaniController::class)->middleware('cekpetani');

// FRONT-END
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::get('/products/{product:slug}/order', [PesananPelangganController::class, 'show']);
    Route::post('/products/{product:slug}/order', [PesananPelangganController::class, 'store']);
    Route::get('/dashboard/myorder', [PesananPelangganController::class, 'index']);
    Route::get('/bayar/{order:id}', [PesananPelangganController::class, 'bayar']);
    Route::delete('/dashboard/myorder/{order:id}', [PesananPelangganController::class, 'batal']);
});

Route::get('/dashboard/pesanan', [AdminController::class, 'index']);
Route::put('dashboard/pesanan/{order:id}', [AdminController::class, 'update']);


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/petani', function () {
    $petani = User::where('role', 'petani')->get();
    
    return view('petani', [
        "title" => "Petani",
        "petani" => $petani
    ]);
});

Route::get('/barista', function () {
    $barista = User::where('role', 'barista')->get();
    
    return view('barista', [
        "title" => "Barista",
        "barista" => $barista
    ]);
});

Route::get('/roaster', function () {
    $roaster = User::where('role', 'roaster')->get();
    
    return view('roaster', [
        "title" => "Roaster",
        "roaster" => $roaster
    ]);
});

Route::get('petani/{user:username}', function(User $user){
    return view('products', [
        'title' => 'Produk Petani',
        'products' => $user -> products->load('user'),
    ]);
});