<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [SummaryController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::get('/summary', [SummaryController::class, 'index'])->name('summary');




Route::get('/department', [DepartmentController::class, 'index'])->name('department');
Route::post('/department/save', [DepartmentController::class, 'save'])->name('department.save');

Route::get('/semester', [SemesterController::class, 'index'])->name('semester');
Route::post('/semester/save', [SemesterController::class, 'save'])->name('semester.save');

Route::get('/section', [SectionController::class, 'index'])->name('section');
Route::post('/section/save', [SectionController::class, 'save'])->name('section.save');

Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::post('/course/save', [CourseController::class, 'save'])->name('course.save');

Route::get('/subject', [SubjectController::class, 'index'])->name('subject');
Route::post('/subject/save', [SubjectController::class, 'save'])->name('subject.save');

Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
Route::post('/teacher/save', [TeacherController::class, 'save'])->name('teacher.save');

Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
Route::post('/classroom/save', [ClassroomController::class, 'save'])->name('classroom.save');

Route::get('/timetable', [TimetableController::class, 'index'])->name('timetable');

// Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/login',  [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout',  [AuthController::class, 'logout'])->name('auth.logout');
