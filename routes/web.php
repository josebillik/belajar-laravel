<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentsController::class, 'index']);
//input
Route::get('/create', [StudentsController::class, 'create']);
Route::post('/create', [StudentsController::class, 'store'])->name('input.student');
//edit
Route::get('/edit/{id}', [StudentsController::class, 'edit']);
Route::put('/edit/{id}', [StudentsController::class, 'update'])->name('edit.student');
//hapus
Route::delete('/{id}', [StudentsController::class, 'delete'])->name('delete.student');
//detail
Route::get('/student/{id}', [StudentsController::class, 'show'])->name('show.student');


