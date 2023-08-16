<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DeviceController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/students', StudentController::class)->name(null,'students');
Route::resource('/computers', ComputerController::class)->name(null,'computer');
Route::resource('/teachers', TeacherController::class)->name(null,'teachers');
Route::resource('/grades', GradeController::class)->name(null,'grades');

Route::get('/confstudent/{id}/confirm', [App\Http\Controllers\StudentController::class, 'confirm'])->name('students.confirm');
// Route::get('/students/cancelar', [App\Http\Controllers\StudentController::class, 'cancel'])->name('students.cancel');

Route::get('/est-cancelar', function () {
    return redirect()->route('students.index');
})->name('cancelar');

Route::resource('/devices', DeviceController::class);