<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

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

// Belajar route

// Route::get('/', function () {
//     return view('welcome', [
//         'name' => 'nabila',
//         'class' => 'A',
//     ]);
// });

// Route::redirect('welocome', 'home');

// Route::get('/{id}', function ($id) {
//     return 'hai '.$id;
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/admin-detail', function () {
//         return 'admin detail';
//     });  

//     Route::get('/admin-product', function () {
//         return 'admin product';
//     });  
// });

// Route::get('/', function () {
//     return view('welcome');
// });


// Login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authing'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Halaman utama
Route::get('/', function () {
    return view('home');
})->middleware('auth');

// Student route
Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware(['auth', 'Must-admin-or-teacher']);
Route::get('/students-add', [StudentController::class, 'create'])->middleware(['auth', 'Must-admin-or-teacher']);
Route::post('/student', [StudentController::class, 'store'])->middleware(['auth', 'Must-admin-or-teacher']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware(['auth', 'Must-admin-or-teacher']);
Route::put('/students/{id}', [StudentController::class, 'update'])->middleware(['auth', 'Must-admin-or-teacher']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware(['auth', 'Must-admin']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware(['auth', 'Must-admin']);
Route::get('/student-deleted', [StudentController::class, 'deletedstudent'])->middleware(['auth', 'Must-admin']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware(['auth', 'Must-admin']);

// Class route
Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class/{id}', [ClassController::class, 'show'])->middleware('auth');
Route::get('/class-add', [ClassController::class, 'create'])->middleware('auth');
Route::post('/clas', [ClassController::class, 'store'])->middleware('auth');
Route::get('/class-edit/{id}', [ClassController::class, 'edit'])->middleware('auth');
Route::put('/clas/{id}', [ClassController::class, 'update'])->middleware('auth');
Route::get('/class-delete/{id}', [ClassController::class, 'delete']);
Route::delete('/class-destroy/{id}', [ClassController::class, 'destroy'])->middleware('auth');
Route::get('/class-deleted', [ClassController::class, 'deletedClass'])->middleware('auth');
Route::get('/class-deleted/{id}/restore', [ClassController::class, 'restore'])->middleware('auth');

// Ekastrakulikuler route
Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create'])->middleware('auth');
Route::post('/extracu', [ExtracurricularController::class, 'store'])->middleware('auth');
Route::get('/extracu-edit/{id}', [ExtracurricularController::class, 'edit'])->middleware('auth');
Route::put('/extracurriculars/{id}', [ExtracurricularController::class, 'update'])->middleware('auth');
Route::get('/extracu-delete/{id}', [ExtracurricularController::class, 'delete'])->middleware('auth');
Route::delete('/extracu-destroy/{id}', [ExtracurricularController::class, 'destroy'])->middleware('auth');
Route::get('/extracu-deleted', [ExtracurricularController::class, 'deletedEkstra'])->middleware('auth');
Route::get('/extracu-deleted/{id}/restore', [ExtracurricularController::class, 'restore'])->middleware('auth');

// Teacher route
Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('/teacher/{id}', [TeacherController::class, 'show'])->middleware('auth');
Route::get('/teacher-add', [TeacherController::class, 'create'])->middleware('auth');
Route::post('/teach', [TeacherController::class, 'store'])->middleware('auth');
Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit'])->middleware('auth');
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->middleware('auth');
Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete'])->middleware('auth');
Route::delete('/teacher-destroy/{id}', [TeacherController::class, 'destroy'])->middleware('auth');
Route::get('/teacher-deleted', [TeacherController::class, 'deleted'])->middleware('auth');
Route::get('/teacher-deleted/{id}/restore', [TeacherController::class, 'restore'])->middleware('auth');