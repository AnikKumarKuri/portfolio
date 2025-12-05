<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\MessageController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact form submit
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::resource('skills', SkillController::class);

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

    // Messages admin
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
});
