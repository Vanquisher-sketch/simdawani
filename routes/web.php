<?php

use App\Http\Controllers\residentcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/resident', [residentcontroller::class, 'index']);
Route::get('/resident/create', [residentcontroller::class, 'create']);
Route::get('/resident/{id}', [residentcontroller::class, 'edit']);
Route::post('/resident', [residentcontroller::class, 'store']);
Route::put('/resident/{id}', [residentcontroller::class, 'update']);
Route::delete('/resident/{id}', [residentcontroller::class, 'destroy']);