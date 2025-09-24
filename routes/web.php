<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\WebAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [WebAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [WebAuthController::class, 'login']);
    Route::get('register', [WebAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [WebAuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [WebAuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AppointmentController::class, 'index'])->name('dashboard');

    Route::resource('pacientes', PatientController::class);

    Route::resource('agendamentos', AppointmentController::class)
    ->names('appointments')
    ->parameters(['agendamentos' => 'appointment']);
});

