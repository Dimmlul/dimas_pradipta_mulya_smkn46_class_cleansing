<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard/siswa', function () {
    return view('dashboardSiswa');
});

Route::get('/dashboard/admin', function () {
    return view('dashboardAdmin');
});
