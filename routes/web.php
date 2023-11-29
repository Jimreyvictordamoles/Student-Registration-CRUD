<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/student", [StudentController::class, 'index'])->name('students\index');

Route::get('/index/create', [StudentController::class, 'create'])->name('students\create');

Route::post('/student', [StudentController::class, 'store'])->name('students\store');

Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('students\destroy');

Route::get('/student/{inventory}', [StudentController::class, 'show'])->name('students\show');

Route::get('/student/{inventory}/edit', [StudentController::class, 'edit'])->name('students\edit');

Route::put('/student/{id}', [StudentController::class, 'update'])->name('students\update');