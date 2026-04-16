<?php

use App\Http\Controllers\DayEntryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/days', [DayEntryController::class, 'index'])->name('days.index');
    Route::post('/days', [DayEntryController::class, 'store'])->name('days.store');
    Route::get('/days/{date}', [DayEntryController::class, 'show'])->name('days.show');
    Route::get('/days/{date}/edit', [DayEntryController::class, 'edit'])->name('days.edit');
    Route::put('/days/{date}', [DayEntryController::class, 'update'])->name('days.update');
});

require __DIR__ . '/auth.php';
