<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ini bisa diakses global
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Ini boleh di akses oleh user yang sudah login (semua user)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ini hanya boleh di akses oleh user dengan role 'admin' dan sudah login
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/management-product', function () {
        return view('management-product');
    })->name('management-product');
});

require __DIR__ . '/auth.php';
