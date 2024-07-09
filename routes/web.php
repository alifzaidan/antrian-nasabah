<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\SettingsController;
use App\Models\Antrian;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::group(['as' => 'ambil-antrian.', 'prefix' => '/ambil-antrian'], function () {
    Route::get('/data', [AntrianController::class, 'index'])->name('index');
    Route::post('/store', [AntrianController::class, 'store'])->name('store');
});

Route::get('/panggil-antrian', function () {
    return view('panggil-antrian');
});

Route::get('/panggil-antrian/detail', function () {
    return view('panggil-antrian-detail');
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
use App\Http\Controllers\VideoController;

Route::post('/upload-video', [VideoController::class, 'store'])->name('video.store');
