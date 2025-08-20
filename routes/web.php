<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\infrastrukturController;
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

<<<<<<< HEAD
Route::get('/resident', [Residentcontroller::class, 'index'])->middleware('role:Admin');
Route::get('/resident/create', [Residentcontroller::class, 'create'])->middleware('role:Admin');
Route::get('/resident/{id}', [Residentcontroller::class, 'edit'])->middleware('role:Admin');
Route::post('/resident', [Residentcontroller::class, 'store'])->middleware('role:Admin');
Route::put('/resident/{id}', [Residentcontroller::class, 'update'])->middleware('role:Admin');
Route::delete('/resident/{id}', [Residentcontroller::class, 'destroy'])->middleware('role:Admin');
=======
Route::get('/resident', [Residentcontroller::class, 'index']);
Route::get('/resident/create', [Residentcontroller::class, 'create']);
Route::get('/resident/{id}', [Residentcontroller::class, 'edit']);
Route::post('/resident', [Residentcontroller::class, 'store']);
Route::put('/resident/{id}', [Residentcontroller::class, 'update']);
Route::delete('/resident/{id}', [Residentcontroller::class, 'destroy']);

Route::get('/infrastruktur', [Infrastrukturcontroller::class, 'index']);
Route::get('/infrastruktur/create', [Infrastrukturcontroller::class, 'create']);
Route::get('/infrastruktur/{id}', [Infrastrukturcontroller::class, 'edit']);
Route::post('/infrastruktur', [Infrastrukturcontroller::class, 'store']);
Route::put('/infrastruktur/{id}', [Infrastrukturcontroller::class, 'update']);
Route::delete('/infrastruktur/{id}', [Infrastrukturcontroller::class, 'destroy']);
>>>>>>> c58e4b2f9266eb66953b6917a940002c13b33566
