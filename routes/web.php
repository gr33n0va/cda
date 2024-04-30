<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaultController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/vault', [VaultContoroller::class])->names('vault');

Route::get('/dashboard', [VaultController::class, 'show']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/store', [VaultController::class, 'store']
)->middleware(['auth', 'verified'])->name('store');

Route::patch('/update/{id}', [VaultController::class, 'update']
)->middleware(['auth', 'verified'])->name('update');

Route::delete('/delete/{id}', [VaultController::class, 'destroy']
)->middleware(['auth', 'verified'])->name('delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
