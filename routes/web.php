<?php

use App\Enum\FileType;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\LangController;
use App\Http\Controllers\Dashboard\DoingController;
use App\Http\Controllers\Dashboard\FileUploadController;
use App\Http\Controllers\Dashboard\ProvinceController;
use App\Http\Controllers\Dashboard\KeywordController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\MartyerController;
use App\Http\Controllers\Dashboard\MenuController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController as DashboardHomeController;
use App\Models\Doing;
use App\Models\FileUpload;
use App\Models\Keyword;
use App\Models\Section;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';

/** ------------------- client ------------------ */
Route::get('/language', LangController::class)->name('language');

/** ------------------- dashboard ------------------ */
Route::middleware(['auth', 'verified', 'ar-lang'])
->get('dashboard', [DashboardHomeController::class, 'index'])->name('dashboard');

Route::middleware(['auth', 'verified', 'ar-lang'])
->prefix('dashboard/')->name('dashboard.')->group(function () {
        Route::resource('settings', SettingController::class)->only('index', 'update');
        Route::resource('sections', SectionController::class);
        Route::resource('fileUploads', FileUploadController::class)->except('show');
        Route::resource('doings', DoingController::class);
        Route::resource('keywords', KeywordController::class)->except('show', 'edit', 'update');
        Route::resource('martyers', MartyerController::class)->except('show');
        Route::resource('menus', MenuController::class);
        Route::resource('provinces', ProvinceController::class)->only('index' ,'edit' , 'update');
        Route::resource('users', UserController::class)->except('show', 'destroy');
        Route::post('users/reset-password', [UserController::class, 'changePassword'])->name('users.reset-password');
    });
Route::get('/', [HomeController::class,  'index'])->name('home.index');
Route::get('/show/{section}', [HomeController::class,  'show'])->name('home.show');
Route::get('/search', [HomeController::class,  'search'])->name('home.search');

// ****************** startup ********************/

Route::get('artisan/{cmd}', function ($cmd) {
    Artisan::call($cmd);
});
Route::get('test', function () {
    return FileUpload::find(1)->createdBy;
});
