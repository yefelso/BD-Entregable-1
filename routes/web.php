<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentViewController;

Route::get('/students', [StudentViewController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentViewController::class, 'create'])->name('students.create');
Route::post('/students', [StudentViewController::class, 'store'])->name('students.store'); // Esta es la ruta que falta
Route::get('/students/{id}', [StudentViewController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentViewController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentViewController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentViewController::class, 'destroy'])->name('students.destroy');