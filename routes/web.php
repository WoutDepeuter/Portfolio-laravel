<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/dashboard/promote/{id}', [DashboardController::class, 'promoteToAdmin'])->middleware(['auth'])->name('dashboard.promote');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/demote/{id}', [DashboardController::class, 'demoteToUser'])->middleware(['auth'])->name('dashboard.demote');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

route::get('/FAQ', function(){
    return view('FAQ');
})->name('FAQ');


require __DIR__.'/auth.php';
