<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\UserTypeController;
use App\Http\Controllers\Admin\ProfileUpdateController;
use App\Http\Controllers\Admin\StudentController;

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
    Route::get('/profile', [ProfileUpdateController::class, 'edit_profile'])->name('update_profile.edit');
    Route::post('/profile', [ProfileUpdateController::class, 'update_profile'])->name('profile_update.update');
    Route::get('/profile/advance/info', [ProfileUpdateController::class, 'advance_info'])->name('advance_info.edit');
});


// Class Route Section //
Route::get('/class', [ClassesController::class, 'index'])->name('class.index')->middleware(['auth', 'verified']);
Route::get('/class/create', [ClassesController::class, 'create'])->name('class.create')->middleware(['auth', 'verified']);
Route::post('/class/store', [ClassesController::class, 'store'])->name('class.store')->middleware(['auth', 'verified']);

// Subject Route Section //
Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index')->middleware(['auth', 'verified']);
Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create')->middleware(['auth', 'verified']);
Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store')->middleware(['auth', 'verified']);

// Department Route Section //
Route::get('/department', [DepartmentController::class, 'index'])->name('department.index')->middleware(['auth', 'verified']);
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create')->middleware(['auth', 'verified']);
Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store')->middleware(['auth', 'verified']);

// User type Route Section //
Route::get('/user/type', [UserTypeController::class, 'index'])->name('user_type.index')->middleware(['auth', 'verified']);
Route::get('/user/type/add', [UserTypeController::class, 'create'])->name('user_type.create')->middleware(['auth', 'verified']);
Route::post('/user/type/store', [UserTypeController::class, 'store'])->name('user_type.store')->middleware(['auth', 'verified']);

// User type Route Section //
Route::get('/all/student', [StudentController::class, 'view'])->name('student.info')->middleware(['auth', 'verified']);








require __DIR__ . '/auth.php';
