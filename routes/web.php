<?php

use App\Http\Controllers\Residentcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/resident', [Residentcontroller::class, 'index']);
Route::get('/resident/create', [Residentcontroller::class, 'create']);
Route::get('/resident/{id}', [Residentcontroller::class, 'edit']);
Route::post('/resident', [Residentcontroller::class, 'store']);
Route::put('/resident/{id}', [Residentcontroller::class, 'update']);
Route::delete('/resident/{id}', [Residentcontroller::class, 'destroy']);