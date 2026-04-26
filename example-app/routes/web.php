<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1>di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('per5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'index']);

Route::get('per5', function () {
    return view('pertemuan1');
});

Route::get('per5', function () {
    return view('pertemuan2');
});

Route::get('per5', function () {
    return view('pertemuan3');
});

Route::get('per5', function () {
    return view('tugaspertemuan3');
});

Route::get('per5', function () {
    return view('pertemuan4');
});

Route::get('per5', function () {
    return view('pertemuan5index');
});

Route::get('per5', function () {
    return view('tugaspertemuan5');
});