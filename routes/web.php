<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/search', [UserController::class, 'search'])->name('user.search');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/promote/{id}', [DashboardController::class, 'promoteToAdmin'])->middleware(['auth'])->name('dashboard.promote');
Route::post('/dashboard/demote/{id}', [DashboardController::class, 'demoteToUser'])->middleware(['auth'])->name('dashboard.demote');
Route::post('/dashboard/remove/{id}', [DashboardController::class, 'removeAccount'])->middleware(['auth'])->name('dashboard.remove');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.update.picture');
    Route::patch('/profile/update-about', [ProfileController::class, 'updateAbout'])->name('profile.update.about');

});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/faqs', [FAQController::class, 'index'])->name('faqs.index');
Route::post('/faqs', [FAQController::class, 'create'])->name('faqs.create');
Route::post('/categories', [FAQController::class, 'storeCategory'])->name('categories.store');
Route::post('/faqs/store', [FAQController::class, 'storeFaq'])->name('faqs.store');

Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile.show');require __DIR__.'/auth.php';
