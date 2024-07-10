<?php

use App\Http\Controllers\AntreanTellerController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::group(['as' => 'ambil-antrean.', 'prefix' => '/ambil-antrean'], function () {
    Route::get('/data', [AntreanTellerController::class, 'index'])->name('index');
    Route::post('/store', [AntreanTellerController::class, 'store'])->name('store');
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
