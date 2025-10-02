<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ContactController;
Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::resource('contacts', App\Http\Controllers\ContactController::class);


// ========== DEPARTMENTS ==========

// Display a list of departments
Route::get('uni/Department/departments', [DepartmentController::class, 'index'])->name('departments.index');

// Show a form to create a new department
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');

// Store a new department
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');

// Show a department's details
Route::get('/uni/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');

// Show a form to edit a department
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');

// Update a department
Route::put('/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');

// Delete a department
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

// ========== COURSES ==========

// Display a list of courses within a department
Route::get('/departments/{department}/courses', [CourseController::class, 'index'])->name('courses.index');

// Show a form to create a new course
Route::get('/departments/{department}/courses/create', [CourseController::class, 'create'])->name('courses.create');

// Store a new course
Route::post('/departments/{department}/courses', [CourseController::class, 'store'])->name('courses.store');

// Show course details
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// Show a form to edit a course
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');

// Update a course
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');

// Delete a course
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

// ========== SYLLABI ==========

// Show the syllabus for a course
Route::get('/courses/{course}/syllabus', [SyllabusController::class, 'show'])->name('syllabus.show');

// Show a form to edit the syllabus
Route::get('/courses/{course}/syllabus/edit', [SyllabusController::class, 'edit'])->name('syllabus.edit');

// Update the syllabus
Route::put('/courses/{course}/syllabus', [SyllabusController::class, 'update'])->name('syllabus.update');

// ========== STUDENTS ==========

// Display a list of students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Show a form to create a new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Store a new student
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Show student details
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

// Show a form to edit a student
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

// Update student information
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// Delete a student
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

// ========== ENROLLMENTS (Many-to-Many relationship between students and courses) ==========

// Enroll a student in a course
Route::post('/courses/{course}/enroll', [EnrollmentController::class, 'store'])->name('enrollments.store');

// Unenroll a student from a course
Route::delete('/courses/{course}/unenroll/{student}', [EnrollmentController::class, 'destroy'])->name('enrollments.destroy');
