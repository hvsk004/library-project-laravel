<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ResourceController as PublicResourceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ResourceController as AdminResourceController;

// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/help', [HomeController::class, 'help'])->name('help.index');

// Help Routes
Route::prefix('help')->name('help.')->group(function () {
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/search', [HomeController::class, 'searchHelp'])->name('search');
    Route::get('/favorites', [HomeController::class, 'favoritesHelp'])->name('favorites');
    Route::get('/account', [HomeController::class, 'accountHelp'])->name('account');
    Route::get('/notifications', [HomeController::class, 'notificationsHelp'])->name('notifications');
});

// User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
    Route::get('/resources/favorites', [PublicResourceController::class, 'favorites'])->name('resources.favorites');
    Route::post('/resources/{resource}/favorite', [PublicResourceController::class, 'toggleFavorite'])->name('resources.favorite');
    Route::get('/profile/edit', [HomeController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile', [HomeController::class, 'updateProfile'])->name('profile.update');
});

Route::get('/resources', [PublicResourceController::class, 'index'])->name('resources.index');
Route::get('/resources/{resource}', [PublicResourceController::class, 'show'])->name('resources.show');

// Admin Routes
Route::middleware(['auth', 'ensure.admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('resources', AdminResourceController::class);
});
