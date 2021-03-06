<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\NotificationController;

Route::view('/', 'welcome')->name('home');
Route::get('/student/login', [StudentController::class, 'login'])->name('student.login');
Route::post('/student/loginReq', [StudentController::class, 'loginReq'])->name('student.loginReq');
Route::get('/student/register', [StudentController::class, 'register'])->name('student.register');
Route::get('/student/dashboard', [StudentController::class, 'studentDashboard'])->name('student.dashboard');
Route::get('/student/password', [StudentController::class, 'studentPassword'])->name('student.password');
Route::post('/student/password', [StudentController::class, 'passwordReq'])->name('student.passwordReq');
Route::get('/student/notification', [StudentController::class, 'notification'])->name('student.notification');

Route::resource('/student', StudentController::class);
Route::get('/staff/login', [StaffController::class, 'login'])->name('staff.login');
Route::post('/staff/loginReq', [StaffController::class, 'loginReq'])->name('staff.loginReq');
Route::get('/staff/register', [StaffController::class, 'register'])->name('staff.register');
Route::get('/staff/dashboard', [StaffController::class, 'dashboard'])->name('staff.dashboard');
Route::get('/staff/teacher', [StaffController::class, 'teacher'])->name('staff.teacher');
Route::get('/staff/student', [StaffController::class, 'student'])->name('staff.student');
Route::get('/staff/students', [StaffController::class, 'students'])->name('staff.students');
Route::get('/staff/password', [StaffController::class, 'staffPassword'])->name('staff.password');
Route::post('/staff/password', [StaffController::class, 'passwordReq'])->name('staff.passwordReq');
Route::get('/staff/notification', [StaffController::class, 'notification'])->name('staff.notification');
Route::get('/staff/Newnotification', [StaffController::class, 'Newnotification'])->name('staff.Newnotification');
Route::post('/staff/notificationReq', [StaffController::class, 'notificationReq'])->name('staff.notificationReq');

Route::resource('/staff', StaffController::class);
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/loginReq', [AdminController::class, 'loginReq'])->name('admin.loginReq');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/createStudent', [AdminController::class, 'createStudent'])->name('admin.createStudent');
Route::post('/admin/createStudent', [AdminController::class, 'studentStore'])->name('admin.studentStore');
Route::get('/admin/totalComplaints', [AdminController::class, 'totalComplaints'])->name('admin.totalComplaints');
Route::get('/admin/totalComplaints/reject/{id}', [AdminController::class, 'totalComplaintsRej'])->name('admin.totalComplaintsRej');
Route::get('/admin/totalComplaints/delete/{id}', [AdminController::class, 'totalComplaintsDel'])->name('admin.totalComplaintsDel');
Route::get('/admin/totalComplaints/fixed/{id}', [AdminController::class, 'totalComplaintsFix'])->name('admin.totalComplaintsFix');
Route::get('/admin/totalComplaints/reply/{id}', [AdminController::class, 'compalinReply'])->name('admin.compalinReply');
Route::post('/admin/totalComplaints/reply', [AdminController::class, 'compalinReplyReq'])->name('admin.compalinReplyReq');
Route::get('/admin/officer', [AdminController::class, 'officer'])->name('admin.officer');
Route::get('/admin/teacher', [AdminController::class, 'teacher'])->name('admin.teacher');
Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');
Route::get('/admin/staffApprove/staffs', [AdminController::class, 'staffs'])->name('admin.staffs');
Route::get('/admin/staffApprove/{id}', [AdminController::class, 'staffApprove'])->name('admin.staffApprove');
Route::get('/admin/staffStop/{id}', [AdminController::class, 'staffStop'])->name('admin.staffStop');
Route::get('/admin/admin.staffNotification', [AdminController::class, 'adminStaffNotification'])->name('admin.staffNotification');

Route::get('/admin/notification', [NotificationController::class, 'index'])->name('admin.notification');
Route::post('/admin/notificationReq', [NotificationController::class, 'adminNotificationReq'])->name('admin.notificationReq');
Route::resource('admin', AdminController::class);
Route::resource('/complaint', ComplaintController::class);
