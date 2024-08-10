<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherAndStaffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\NewsController;
use App\Models\News;
use App\Http\Controllers\AchievementController;
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

/* Main Page */

Route::get('/', [HomeController::class, 'index'])->middleware('guest');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('guest');
Route::get('/teacher', [TeacherAndStaffController::class, 'index'])->middleware('guest');
Route::get('/kepsek', [TeacherAndStaffController::class, 'kepsek'])->middleware('guest');
Route::get('/ekskul', [ExtracurricularController::class, 'index'])->middleware('guest');
Route::get('/news', [NewsController::class, 'index'])->middleware('guest');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->middleware('guest');
Route::get('/articles', [NewsController::class, 'articles'])->middleware('guest');

/* Admin */
Route::get('/login', [AdminController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AdminController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/teacher-admin', [TeacherAndStaffController::class, 'admin'])->middleware('auth');
Route::get('/news-admin', [NewsController::class, 'admin'])->middleware('auth');
Route::get('/achievement-admin', [AchievementController::class, 'admin'])->middleware('auth');
Route::get('/extracurricular-admin', [ExtracurricularController::class, 'admin'])->middleware('auth');

Route::get('/checkSlug', [NewsController::class, 'checkSlug'])->middleware('auth');

/* Add Data */
Route::post('/achievement-add', [AchievementController::class, 'create'])->middleware('auth');
Route::post('/extracurricular-add', [ExtracurricularController::class, 'create'])->middleware('auth');
Route::post('/news-add', [NewsController::class, 'create'])->middleware('auth');
Route::post('/teacher-add', [TeacherAndStaffController::class, 'create'])->middleware('auth');

/* Update Data */
Route::put('/achievement-update/{id}', [AchievementController::class, 'update'])->middleware('auth');
Route::put('/extracurricular-update/{id}', [ExtracurricularController::class, 'update'])->middleware('auth');
Route::put('/news-update/{id}', [NewsController::class, 'update'])->middleware('auth');
Route::put('/teacher-update/{id}', [TeacherAndStaffController::class, 'update'])->middleware('auth');
Route::put('/dashboard-update/{id}', [AdminController::class, 'update_status'])->middleware('auth');

/* Delete Data */
Route::delete('/achievement-delete/{id}', [AchievementController::class, 'delete']);
Route::delete('/extracurricular-delete/{id}', [ExtracurricularController::class, 'delete']);
Route::delete('/news-delete/{id}', [NewsController::class, 'delete']);
Route::delete('/teacher-delete/{id}', [TeacherAndStaffController::class, 'delete']);
