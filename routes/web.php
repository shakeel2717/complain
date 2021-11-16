<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::view('/','welcome');
Route::get('/student/login',[StudentController::class,'login'])->name('student.login');
Route::post('/student/loginReq',[StudentController::class,'loginReq'])->name('student.loginReq');
Route::get('/student/register',[StudentController::class,'register'])->name('student.register');
Route::get('/student/dashboard',[StudentController::class,'studentDashboard'])->name('student.dashboard');

Route::resource('/student',StudentController::class);
Route::get('/staff/login',[StaffController::class,'login'])->name('staff.login');
Route::post('/staff/loginReq',[StaffController::class,'loginReq'])->name('staff.loginReq');
Route::get('/staff/register',[StaffController::class,'register'])->name('staff.register');
Route::resource('/staff',StaffController::class);
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/loginReq',[AdminController::class,'loginReq'])->name('admin.loginReq');
Route::get('/admin/register',[AdminController::class,'register'])->name('admin.register');
Route::get('/admin/createStudent',[AdminController::class,'createStudent'])->name('admin.createStudent');
Route::post('/admin/createStudent',[AdminController::class,'studentStore'])->name('admin.studentStore');

Route::resource('admin', AdminController::class);