<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class);

Route::get('/students', [StudentController::class,"index"])->name('students.index');

Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/students/create', [StudentController::class,"create"])->name('students.create');
Route::post('/students', [StudentController::class, "store"])->name('students.store');

Route::get('/students/show/{id}', [StudentController::class,"show"])->name('students.show');

Route::put('/students/update/{id}', [StudentController::class,"update"])->name('students.update');
Route::get('/students/edit/{id}', [StudentController::class,"edit"])->name('students.edit');


?>