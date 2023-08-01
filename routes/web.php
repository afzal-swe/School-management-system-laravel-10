<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\UserTypeController;
use App\Http\Controllers\Admin\ProfileUpdateController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\EventController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Update Profile Route Section //
    Route::get('/profile/advance/info', [ProfileUpdateController::class, 'advance_info'])->name('advance_info.edit');
    Route::post('/profile/update/{id}', [ProfileUpdateController::class, 'advance_info_update'])->name('advance_info.update');
});


// All User Route Section //
Route::get('/all/user', [UserController::class, 'index'])->name('user.index')->middleware(['auth', 'verified']);
Route::get('/create/user', [UserController::class, 'create'])->name('user.create')->middleware(['auth', 'verified']);
Route::post('/store/user', [UserController::class, 'store'])->name('user.store')->middleware(['auth', 'verified']);
Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware(['auth', 'verified']);
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware(['auth', 'verified']);
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update')->middleware(['auth', 'verified']);

// All Books Route Section //
Route::get('/all/books', [BooksController::class, 'index'])->name('book.index')->middleware(['auth', 'verified']);
Route::get('/books/view', [BooksController::class, 'view'])->name('book.view')->middleware(['auth', 'verified']);
Route::get('/books/create', [BooksController::class, 'create'])->name('book.create')->middleware(['auth', 'verified']);
Route::post('/books/store', [BooksController::class, 'store'])->name('book.store')->middleware(['auth', 'verified']);
Route::get('/books/delete/{id}', [BooksController::class, 'destroy'])->name('book.destroy')->middleware(['auth', 'verified']);
Route::get('/books/edit/{id}', [BooksController::class, 'edit'])->name('book.edit')->middleware(['auth', 'verified']);
Route::post('/books/update/{id}', [BooksController::class, 'update'])->name('book.update')->middleware(['auth', 'verified']);

// Class Route Section //
Route::get('/class', [ClassesController::class, 'index'])->name('class.index')->middleware(['auth', 'verified']);
Route::get('/class/create', [ClassesController::class, 'create'])->name('class.create')->middleware(['auth', 'verified']);
Route::post('/class/store', [ClassesController::class, 'store'])->name('class.store')->middleware(['auth', 'verified']);
Route::get('/class/delete/{id}', [ClassesController::class, 'destroy'])->name('class.destroy')->middleware(['auth', 'verified']);
Route::get('/class/edit/{id}', [ClassesController::class, 'edit'])->name('class.edit')->middleware(['auth', 'verified']);
Route::post('/class/update/{id}', [ClassesController::class, 'update'])->name('class.update')->middleware(['auth', 'verified']);

// Subject Route Section //
Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index')->middleware(['auth', 'verified']);
Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create')->middleware(['auth', 'verified']);
Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store')->middleware(['auth', 'verified']);
Route::get('/subject/delete/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy')->middleware(['auth', 'verified']);
Route::get('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit')->middleware(['auth', 'verified']);
Route::post('/subject/update/{id}', [SubjectController::class, 'update'])->name('subject.update')->middleware(['auth', 'verified']);

// Department Route Section //
Route::get('/department', [DepartmentController::class, 'index'])->name('department.index')->middleware(['auth', 'verified']);
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create')->middleware(['auth', 'verified']);
Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store')->middleware(['auth', 'verified']);
Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy')->middleware(['auth', 'verified']);
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit')->middleware(['auth', 'verified']);
Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update')->middleware(['auth', 'verified']);

// User type Route Section //
Route::get('/user/type', [UserTypeController::class, 'index'])->name('user_type.index')->middleware(['auth', 'verified']);
Route::get('/user/type/add', [UserTypeController::class, 'create'])->name('user_type.create')->middleware(['auth', 'verified']);
Route::post('/user/type/store', [UserTypeController::class, 'store'])->name('user_type.store')->middleware(['auth', 'verified']);
Route::get('/user/type/delete/{id}', [UserTypeController::class, 'destroy'])->name('user_type.destroy')->middleware(['auth', 'verified']);
Route::get('/user/type/edit/{id}', [UserTypeController::class, 'edit'])->name('user_type.edit')->middleware(['auth', 'verified']);
Route::post('/user/type/update/{id}', [UserTypeController::class, 'update'])->name('user_type.update')->middleware(['auth', 'verified']);

// Student Route Section //
Route::get('/student', [StudentController::class, 'index'])->name('student.index')->middleware(['auth', 'verified']);
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create')->middleware(['auth', 'verified']);
Route::post('/store/student', [StudentController::class, 'store'])->name('student_add.store')->middleware(['auth', 'verified']);
Route::get('/all/student', [StudentController::class, 'view'])->name('student.info')->middleware(['auth', 'verified']);
Route::get('/student/register', [StudentController::class, 'register_create'])->name('student_register.create');
Route::post('/student/store', [StudentController::class, 'student_store'])->name('student.store')->middleware(['auth', 'verified']);
Route::get('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy')->middleware(['auth', 'verified']);
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit')->middleware(['auth', 'verified']);
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update')->middleware(['auth', 'verified']);

// Teacher Route Section //
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index')->middleware(['auth', 'verified']);
Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create')->middleware(['auth', 'verified']);
Route::post('/add/teacher/store', [TeacherController::class, 'store'])->name('teacher_add.store')->middleware(['auth', 'verified']);
Route::get('/all/teacher', [TeacherController::class, 'view'])->name('teacher.info')->middleware(['auth', 'verified']);
Route::get('/teacher/register', [TeacherController::class, 'register_create'])->name('teacher_register.create');
Route::post('/teacher/store', [TeacherController::class, 'teacher_store'])->name('teacher.store')->middleware(['auth', 'verified']);
Route::get('/teacher/delete/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy')->middleware(['auth', 'verified']);
Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit')->middleware(['auth', 'verified']);
Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])->name('teacher.update')->middleware(['auth', 'verified']);
// Teacher Profile Update //
Route::get('/teacher/profile', [TeacherController::class, 'teacher_profile'])->name('advance_teacher.edit')->middleware(['auth', 'verified']);
Route::post('/teacher/profile/update/{id}', [TeacherController::class, 'teacher_profil'])->name('teacher_info.update')->middleware(['auth', 'verified']);

// Notice Route Section //
Route::get('/notice', [NoticeController::class, 'view'])->name('notice.view')->middleware(['auth', 'verified']);
Route::get('/all/notice', [NoticeController::class, 'index'])->name('notice.index')->middleware(['auth', 'verified']);
Route::get('/create/notice', [NoticeController::class, 'create'])->name('notice.create')->middleware(['auth', 'verified']);
Route::post('/store/notice', [NoticeController::class, 'store'])->name('notice.store')->middleware(['auth', 'verified']);
Route::get('/store/delete/{id}', [NoticeController::class, 'destroy'])->name('notice.destroy')->middleware(['auth', 'verified']);
Route::get('/store/edit/{id}', [NoticeController::class, 'edit'])->name('notice.edit')->middleware(['auth', 'verified']);
Route::post('/store/update/{id}', [NoticeController::class, 'update'])->name('notice.update')->middleware(['auth', 'verified']);

// Events Route Section //
Route::get('/all/events', [EventController::class, 'index'])->name('event.index')->middleware(['auth', 'verified']);
Route::get('/events', [EventController::class, 'view'])->name('event.view')->middleware(['auth', 'verified']);
Route::get('/events/create', [EventController::class, 'create'])->name('event.create')->middleware(['auth', 'verified']);
Route::post('/events/store', [EventController::class, 'store'])->name('event.store')->middleware(['auth', 'verified']);
Route::get('/events/destroy/{id}', [EventController::class, 'destroy'])->name('event.destroy')->middleware(['auth', 'verified']);
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('event.edit')->middleware(['auth', 'verified']);
Route::post('/events/update/{id}', [EventController::class, 'update'])->name('event.update')->middleware(['auth', 'verified']);



// SEO Route Section //
Route::get('/seo', [SeoController::class, 'seo'])->name('seo.setting')->middleware(['auth', 'verified']);
Route::post('/seo/update/{id}', [SeoController::class, 'update'])->name('seo.update')->middleware(['auth', 'verified']);









require __DIR__ . '/auth.php';
