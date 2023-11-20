<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeinfoController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Admin\createUserController;
use App\Http\Controllers\Admin\SubmitController;
use App\Http\Controllers\Admin\AdminprocurementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\procurementController;
use App\Http\Controllers\UserRequestController;




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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/user', function () {
    return view('user');
});

Route::get('/procurement', function () {
    return view('procurement');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'procurement'])->middleware('role');
});

Route::prefix('admin')->group(function (){
    Route::get('/procurement', [DashboardController::class, 'procurement'])->middleware('role');
});

Route::prefix('admin')->group(function (){
    Route::get('/procurement/makesubmission', [SubmitController::class, 'index'])->middleware('role');
});

Route::prefix('admin')->group(function (){
    Route::get('/employeeinfo', [EmployeeinfoController::class, 'index'])->middleware('role');
});

Route::prefix('admin')->group(function (){
    Route::get('/user', [userController::class, 'index'])->middleware('role');
});

Route::prefix('procurement')->group(function (){
    Route::get('/makesubmission', [SubmissionController::class, 'index'])->name('makesubmission');
});

Route::get('/user', [HomeController::class, 'changePassword'])->name('change-password');

Route::post('/user', [HomeController::class, 'updatePassword'])->name('update-password');

Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['role']], function() {
    Route::resource('admin/dashboard', DashboardController::class);
    Route::resource('users', UserController::class);
    
});

Route::post('/procurement/makesubmission', [procurementController::class, 'store'])->name('store');

Route::post('/admin/procurement/makesubmission', [AdminprocurementController::class, 'store'])->name('store');



Route::get('/user', [UserRequestController::class, 'index'])->middleware('auth');

Route::prefix('admin')->group(function (){
    Route::get('/createuser', [createUserController::class, 'index'])->middleware('auth');
});


   
