<?php

use Illuminate\Support\Facades\Route;

Route::get('/siswa/create', function () {
    return view('Siswa.create');
});
Route::get('/', function () {
    return view('Siswa.index');
});

