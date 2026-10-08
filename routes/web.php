<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});


Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
Route::get('/matakuliah/{kode}/edit', [MatakuliahController::class, 'edit']);
Route::put('/matakuliah/{kode}', [MatakuliahController::class, 'update']);
Route::delete('/matakuliah/{kode}', [MatakuliahController::class, 'destroy']);