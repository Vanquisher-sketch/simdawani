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
})->middleware('role:Admin,User');

Route::get('/resident', [Residentcontroller::class, 'index'])->middleware('role:Admin');
Route::get('/resident/create', [Residentcontroller::class, 'create'])->middleware('role:Admin');
Route::get('/resident/{id}', [Residentcontroller::class, 'edit'])->middleware('role:Admin');
Route::post('/resident', [Residentcontroller::class, 'store'])->middleware('role:Admin');
Route::put('/resident/{id}', [Residentcontroller::class, 'update'])->middleware('role:Admin');
Route::delete('/resident/{id}', [Residentcontroller::class, 'destroy'])->middleware('role:Admin');