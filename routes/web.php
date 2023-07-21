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
    return view('home.home');
});
Route::get('/login', function () {
    return view('auth.login');
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
