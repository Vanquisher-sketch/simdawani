<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResidentController;
use Illuminate\Support\Facades\Route;

// Auth
Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/resident', [Residentcontroller::class, 'index']);
Route::get('/resident/create', [Residentcontroller::class, 'create']);
Route::get('/resident/{id}', [Residentcontroller::class, 'edit']);
Route::post('/resident', [Residentcontroller::class, 'store']);
Route::put('/resident/{id}', [Residentcontroller::class, 'update']);
Route::delete('/resident/{id}', [Residentcontroller::class, 'destroy']);