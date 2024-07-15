<?php

<<<<<<< HEAD
use App\Http\Controllers\AntreanTellerController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\VideoController;
=======
use App\Http\Middleware\Authenticate;
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AntreanController;
use App\Http\Controllers\PanggilAntreanController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StoreVideoController;

Route::get('/', function () {
    return view('home');
});

Route::group(['as' => 'ambil-antrean.', 'prefix' => '/ambil-antrean'], function () {
    Route::get('/', [AntreanController::class, 'index'])->name('index');
    Route::post('/teller', [AntreanController::class, 'storeTeller'])->name('store_teller');
    Route::post('/cs', [AntreanController::class, 'storeCs'])->name('store_cs');
});

Route::group(['as' => 'panggil-antrean.', 'prefix' => '/panggil-antrean'], function () {
    Route::get('/', [PanggilAntreanController::class, 'index'])->name('index');
    Route::get('/teller/{counterId}', [PanggilAntreanController::class, 'detailTeller'])->name('teller');
    Route::post('/teller/panggil/{antreanId}', [PanggilAntreanController::class, 'panggilAntreanTeller'])->name('teller.panggil');
    Route::get('/cs/{counterId}', [PanggilAntreanController::class, 'detailCs'])->name('cs');
    Route::post('/cs/panggil/{antreanId}', [PanggilAntreanController::class, 'panggilAntreanCs'])->name('cs.panggil');
});

// Route::get('/panggil-antrean', function () {
//     return view('panggil-antrean');
// });

// Route::get('/panggil-antrean/detail', function () {
//     return view('panggil-antrean-detail');
// });

Route::get('/monitor', function () {
    return view('monitor');
});

Route::get('/login', function () {
    return view('settings/login');
});

Route::group(['as' => 'settings.', 'prefix' => '/settings'], function () {
<<<<<<< HEAD
    Route::get('/monitor', [SettingsController::class, 'monitor'])->name('monitor');
    Route::get('/operasional', [SettingsController::class, 'operasional'])->name('operasional');
    Route::get('/unit', [SettingsController::class, 'unit'])->name('unit');
    Route::put('/unit/{unit}', [UnitController::class, 'update'])->name('unit.update');
    Route::post('/unit', [UnitController::class, 'store'])->name('unit.store');
});

Route::post('/upload-video', [VideoController::class, 'store'])->name('video.store');
=======
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

Route::post('/upload-video', [StoreVideoController::class, 'store'])->name('video.store');
Route::delete('/video/{id}', [StoreVideoController::class, 'destroy'])->name('video.destroy');

>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0

