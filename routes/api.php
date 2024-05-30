<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

// Rutas para todos los métodos del controlador
Route::get('students', [StudentController::class, 'index']);

// Rutas adicionales para los métodos de vista
Route::post('/students/create', [StudentController::class, 'store']);
Route::get('/students/{id}', [StudentController::class, 'show']);

// Ruta para el método submit
Route::put('/students/submit', [StudentController::class, 'submit']);

// Ruta para el método delete
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
