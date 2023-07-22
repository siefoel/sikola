<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::controller(AuthController::class)->group(function(){
    Route::get('auth','index')->name('login');
    Route::get('pendaftaran','pendaftaran')->name('penndaftaran');
    Route::post('auth/login','login');
    Route::post('auth/register','register');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/users', function () {
    return view('dashboard.users');
});
Route::get('/datasekolah', function () {
    return view('sekolah.sekolah');
});
Route::get('/verifysekolah', function () {
    return view('sekolah.verifysekolah');
});
Route::get('/role', function () {
    return view('role.role');
});
