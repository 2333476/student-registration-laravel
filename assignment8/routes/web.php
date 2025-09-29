<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
