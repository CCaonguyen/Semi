<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::post('/login', [UserController::class,'login'])->name('auth.login'); 
Route::get('/login_url', [UserController::class,'showlogin'])->name('login'); 
Route::get('/attendance', [UserController::class,'attendance'])->name('attendance'); 
Route::get('/class', [UserController::class,'class'])->name('class'); 
Route::get('/class_2', [UserController::class,'class_2'])->name('class_2'); 
Route::get('/course_2', [UserController::class,'course_2'])->name('course_2'); 
Route::get('/course', [UserController::class,'course'])->name('course'); 
Route::get('/homepage', [UserController::class,'homepage'])->name('homepage'); 
Route::get('/index', [UserController::class,'index'])->name('index'); 
Route::get('/manage_attendance_2', [UserController::class,'manage_attendance_2'])->name('manage_attendance_2'); 
Route::get('/manage_attendance', [UserController::class,'manage_attendance'])->name('manage_attendance'); 
Route::get('/schedule', [UserController::class,'schedule'])->name('schedule'); 