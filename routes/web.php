<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;


Route::name('users.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/video/show/{$video}', [HomeController::class, 'show'])
        ->name('video.show');
    
});

// Route::get('fake-email', function (\Illuminate\Http\Request $request) {
//     $email = $request->query('email');

//     (new \App\Actions\CheckAgainDisposableMail())($email);
// });

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [HomeController::class, 'adminIndex'])->name('dashboard');
        Route::resource('authors', AuthorsController::class);
        Route::resource('genres', GenreController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('contents', ContentController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
