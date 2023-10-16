<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;




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
    return view('dashboard');
});

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
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('dashboard');
});

Route::prefix('procurement')->group(function (){
    Route::get('/makesubmission', [SubmissionController::class, 'index'])->name('makesubmission');
});

Route::get('/user', [HomeController::class, 'changePassword'])->name('change-password');

Route::post('/user', [HomeController::class, 'updatePassword'])->name('update-password');

Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    
});
   
