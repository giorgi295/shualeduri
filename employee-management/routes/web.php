<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('index');


Route::delete('/delete/{id}', [\App\Http\Controllers\EmployeeController::class, 'delete'])->name('delete');

Route::get('/employees/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('update');

Route::put('/edited/{id}', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('edit');

Route::post('/hired/{id}', [\App\Http\Controllers\EmployeeController::class, 'hired'])->name('hired');

