<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JarmuvekManager;
use App\Http\Controllers\ProductController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Route;

Route::get('/', [JarmuvekManager::class, "index"]) -> name("home");

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "authenticate"])->name('authenticate');

Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
 
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{product_id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{product_id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{product_id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{product_id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
});

Route::get('/db-test', function () { try { FacadesDB::connection()->getPdo(); return 'Sikeres adatbázis kapcsolat!'; } catch (\Exception $e) { return 'Adatbázis kapcsolat hiba: ' . $e->getMessage(); } });
