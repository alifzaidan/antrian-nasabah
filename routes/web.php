<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AntreanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UnitController;
use App\Http\Middleware\Authenticate;

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
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login_proccess'])->name('login.proccess');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::middleware(Authenticate::class)->group(function () {
        Route::get('/monitor', [SettingsController::class, 'monitor'])->name('monitor');
        Route::put('/monitor/{unitId}', [SettingsController::class, 'updateMonitor'])->name('monitor.update');
        Route::get('/operasional', [SettingsController::class, 'operasional'])->name('operasional');
        Route::post('/reset-teller', [SettingsController::class, 'resetTeller'])->name('reset.teller');
        Route::post('/reset-cs', [SettingsController::class, 'resetCs'])->name('reset.cs');
        Route::post('/add-teller/{unitId}', [SettingsController::class, 'addTeller'])->name('add-teller');
        Route::post('/remove-teller/{unitId}', [SettingsController::class, 'removeTeller'])->name('remove-teller');
        Route::post('/add-cs/{unitId}', [SettingsController::class, 'addCs'])->name('add-cs');
        Route::post('/remove-cs/{unitId}', [SettingsController::class, 'removeCs'])->name('remove-cs');
        Route::get('/unit', [SettingsController::class, 'unit'])->name('unit');
        Route::put('/unit/{unitId}', [SettingsController::class, 'updateUnit'])->name('unit.update');
    });
});

Route::post('/upload-video', [VideoController::class, 'store'])->name('video.store');
