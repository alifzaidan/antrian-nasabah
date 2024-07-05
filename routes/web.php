<?php

use App\Http\Controllers\AntrianController;
use App\Models\Antrian;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/nomor-antrian', function () {
//     return view('nomor-antrian', [AntrianController::class, 'getLastAntrian']);
// });

Route::group(['as' => 'ambil-antrian.', 'prefix' => '/ambil-antrian'], function () {
    Route::get('/data', [AntrianController::class, 'index'])->name('index');
    Route::post('/store', [AntrianController::class, 'store'])->name('store');
});

// Route::group(['as' => 'penilaian.', 'prefix' => '/penilaian'], function () {
//     Route::get('/pengumpulan-karya', [AntrianController::class, 'show_pengumpulan'])->name('pengumpulan_karya')->middleware('permission:posterpenilaian_view');
//     Route::put('/update-nilai/{karyas}', [AntrianController::class, 'update_nilai'])->name('update_nilai')->middleware('permission:posterpenilaian_create_edit');
//     Route::get('/data/{id}', [AntrianController::class, 'index'])->name('index')->middleware('permission:posterpenilaian_view');
//     Route::delete('/delete/{karyas}', [AntrianController::class, 'destroy'])->name('delete')->middleware('permission:posterpenilaian_delete');
// });
