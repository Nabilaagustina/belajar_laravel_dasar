<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;

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

Route::get('/student', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);
