<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PartsSumController;
use App\Http\Controllers\BottleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [EmployeeController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Mini Project - Employee Records
    Route::resource('employees', EmployeeController::class);

    // Machine Problem 1 - Sum Parts
    Route::get('/sumparts', [PartsSumController::class, 'index'])->name('sumparts.index');

    // Machine Problem 2 - Bottle Collector
    Route::get('/bottle', [BottleController::class, 'index'])->name('bottle.index');
    Route::post('/bottle/calculate', [BottleController::class, 'calculate']);
});

require __DIR__.'/auth.php';
