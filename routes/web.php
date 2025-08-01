<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/siswa/create', function () {
    return view('Siswa.create');
});
Route::get('/', function () {
    return view('Siswa.index');
});
Route::post('/siswa/store', [SiswaController::class, 'store']);
