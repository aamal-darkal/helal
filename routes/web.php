<?php

use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\LangController;
use App\Http\Controllers\Dashboard\DoingController;
use App\Http\Controllers\Dashboard\ProvinceController;
use App\Http\Controllers\Dashboard\KeywordController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\MartyerController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\userController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
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
//  })->middleware(['auth', 'verified'])
})->name('dashboard');

Route::prefix('dashboard/')->name('dashboard.')->group(function(){
    Route::resource('settings', SettingController::class)->only('index', 'update' );
    Route::resource('/provinces', ProvinceController::class)->except('show');
    Route::resource('sections',SectionController::class);
    Route::resource('doings', DoingController::class);
    Route::resource('keywords', KeywordController::class)->except('show' , 'edit' , 'update');
    Route::resource( 'martyers', MartyerController::class)->except('show');
    Route::resource( 'users', userController::class)->except('show' , 'destroy');
    Route::post('/users/change-password' , [UserController::class , 'changePassword'])->name('dashboard.users.change-password');

});
Route::get('/', [ HomeController::class,  'index'])->name('home.index');
Route::get('/show/{section}', [HomeController::class,  'show'])->name('home.show');
Route::get('/search', [HomeController::class,  'search'])->name('home.search');

// ****************** startup ********************/

Route::get('artisan/{cmd}', function($cmd){    
        Artisan::call($cmd);
});
