<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('procurement')->group(function (){
    Route::get('/makesubmission', [App\Http\Controllers\Admin\SubmissionController::class, 'index'])->name('makesubmission');
});

Route::get('/user', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');

Route::post('/user', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

