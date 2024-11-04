<?php

use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\LangController;
use App\Http\Controllers\Dashboard\MartyerController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/** ------------------- client ------------------ */
Route::get('/language', [LangController::class, 'setLang'])->name('language');

/** ------------------- dashboard ------------------ */
Route::get('/dashboard', function () {
    return view('dashboard.home');
// })->middleware(['auth', 'verified'])
})->name('dashboard');

Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::resource( '/martyers', MartyerController::class)->except('show');
    Route::resource('/sections',SectionController::class);
});
Route::get('/', [HomeController::class,  'index']);
