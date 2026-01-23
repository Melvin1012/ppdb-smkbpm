<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SiswaController;

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/siswa',[SiswaController::class,'getdata']);


