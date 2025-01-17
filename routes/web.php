<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

// Dashboard routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/promote/{id}', [DashboardController::class, 'promoteToAdmin'])->name('dashboard.promote');
    Route::post('/dashboard/demote/{id}', [DashboardController::class, 'demoteToUser'])->name('dashboard.demote');
    Route::post('/dashboard/remove/{id}', [DashboardController::class, 'removeAccount'])->name('dashboard.remove');
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.update.picture');
    Route::patch('/profile/update-about', [ProfileController::class, 'updateAbout'])->name('profile.update.about');
});
Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile.show');

// Search route
Route::get('/search', [UserController::class, 'search'])->name('user.search');

// FAQ routes
Route::get('/faqs', [FAQController::class, 'index'])->name('faqs.index');
Route::post('/faqs', [FAQController::class, 'create'])->name('faqs.create');
Route::post('/categories', [FAQController::class, 'storeCategory'])->name('categories.store');
Route::post('/faqs/store', [FAQController::class, 'storeFaq'])->name('faqs.store');

// News routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::patch('/news/{id}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

// Contact routes
Route::get('/contact', function () {
    return view('Contact');
})->name('contact.page');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Forum routes
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');
Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');
Route::post('/forum/{id}/comment', [ForumController::class, 'storeComment'])->name('forum.comment.store');

// Authentication routes
require __DIR__.'/auth.php';

