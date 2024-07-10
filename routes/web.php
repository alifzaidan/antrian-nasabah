<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AntreanController;
use App\Http\Controllers\SettingsController;

Route::get('/', function () {
    return view('home');
});

Route::group(['as' => 'ambil-antrean.', 'prefix' => '/ambil-antrean'], function () {
    Route::get('/data', [AntreanController::class, 'index'])->name('index');
    Route::post('/teller', [AntreanController::class, 'storeTeller'])->name('store_teller');
    Route::post('/cs', [AntreanController::class, 'storeCs'])->name('store_cs');
});

Route::get('/panggil-antrean', function () {
    return view('panggil-antrean');
});

Route::get('/panggil-antrean/detail', function () {
    return view('panggil-antrean-detail');
});

Route::get('/monitor', function () {
    return view('monitor');
});

Route::get('/login', function () {
    return view('settings/login');
});

Route::group(['as' => 'settings.', 'prefix' => '/settings'], function () {
    Route::get('/monitor', [SettingsController::class, 'monitor'])->name('monitor');
    Route::get('/operasional', [SettingsController::class, 'operasional'])->name('operasional');
    Route::get('/unit', [SettingsController::class, 'unit'])->name('unit');
});

Route::post('/upload-video', [VideoController::class, 'store'])->name('video.store');
