<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\RoleController;
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

// Route::controller(AuthController::class)->group(function(){
//     Route::get('auth','index')->name('login');
//     Route::get('pendaftaran','pendaftaran')->name('penndaftaran');
//     Route::post('auth/login','login');
//     Route::post('auth/register','register');
// });

Route::prefix('auth')->group(function () {
    Route::get('/',[AuthController::class,'index'])->name('login');
    Route::get('pendaftaran',[AuthController::class,'pendaftaran'])->name('penndaftaran');
    Route::post('login',[AuthController::class,'login']);
    Route::post('register',[AuthController::class,'register']);
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
});
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::prefix('user')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('user');
});
Route::prefix('sekolah')->group(function(){
    Route::get('/',[SekolahController::class,'index'])->name('datasekolah');
    Route::get('verify',[SekolahController::class,'verify'])->name('verifysekolah');
});
Route::prefix('role')->group(function(){
    Route::get('/',[RoleController::class,'index'])->name('role');
    Route::get('menus',[RoleController::class,'menus'])->name('menu');
    Route::get('permission',[RoleController::class,'permission'])->name('permission');
});
