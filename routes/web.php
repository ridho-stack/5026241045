<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/makeover', function () {
    return view('makeover-ig');
});

Route::get('/praets', function () {
    return view('praets');
});

Route::get('/ets', function () {
    return view('ETS2026');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);
