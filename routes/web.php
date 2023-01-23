<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home', [
        'name' => 'Nabila',
        'class' => 'A',
        'scores' => [90, 80, 100, 82, 91],
    ]);
});

// Student
Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/students-add', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);
Route::get('/student-deleted', [StudentController::class, 'deletedstudent']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore']);

// Class
Route::get('/class', [ClassController::class, 'index']);
Route::get('/class/{id}', [ClassController::class, 'show']);
Route::get('/class-add', [ClassController::class, 'create']);
Route::post('/clas', [ClassController::class, 'store']);
Route::get('/class-edit/{id}', [ClassController::class, 'edit']);
Route::put('/clas/{id}', [ClassController::class, 'update']);
Route::get('/class-delete/{id}', [ClassController::class, 'delete']);
Route::delete('/class-destroy/{id}', [ClassController::class, 'destroy']);

// Ekastrakulikuler
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show']);
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create']);
Route::post('/extracu', [ExtracurricularController::class, 'store']);
Route::get('/extracu-edit/{id}', [ExtracurricularController::class, 'edit']);
Route::put('/extracurriculars/{id}', [ExtracurricularController::class, 'update']);
Route::get('/extracu-delete/{id}', [ExtracurricularController::class, 'delete']);
Route::delete('/extracu-destroy/{id}', [ExtracurricularController::class, 'destroy']);

// Teacher
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher/{id}', [TeacherController::class, 'show']);
Route::get('/teacher-add', [TeacherController::class, 'create']);
Route::post('/teach', [TeacherController::class, 'store']);
Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit']);
Route::put('/teachers/{id}', [TeacherController::class, 'update']);
Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete']);
Route::delete('/teacher-destroy/{id}', [TeacherController::class, 'destroy']);