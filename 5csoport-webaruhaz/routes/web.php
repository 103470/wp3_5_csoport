<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "authenticate"])->name('authenticate');

Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::get('/db-test', function () { try { FacadesDB::connection()->getPdo(); return 'Sikeres adatbázis kapcsolat!'; } catch (\Exception $e) { return 'Adatbázis kapcsolat hiba: ' . $e->getMessage(); } });
