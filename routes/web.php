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

// ✅ Public project details route
Route::get('/projects/{project:slug}', [HomeController::class, 'projectShow'])->name('projects.show');

// Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin (protected)
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::resource('skills', SkillController::class);

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
});

// Breeze dashboard redirect (optional)
Route::get('/dashboard', function () {
    return redirect()->route('admin.projects.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
