<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('admin');

Route::get('employee/dashboard',[App\Http\Controllers\EmployeeController::class,'dashboard'])->name('employee.dashboard')->middleware('employee');

Route::get('manager/dashboard',[App\Http\Controllers\ManagerController::class,'dashboard'])->name('manager.dashboard')->middleware('manager');



// studen
Route::resource('student',StudentController::class);
