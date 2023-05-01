<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{
    KerjaSamaController,
    DashboardController,
    LoginController,
    UserController,
    PenelitianController,
    PengabdianController,
    DosenController
};
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


Route::get('/blumjadi', function () {
    return view('errors.comming-soon');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('partials.layouts');
    });
    Route::resource('kerjasama', KerjaSamaController::class);
    Route::resource('dashboard', DashboardController::class); 
    Route::resource('pen', PenelitianController::class); 
    Route::resource('peng', PengabdianController::class); 
});

Route::resource('kerjasama', KerjaSamaController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('dosen', DosenController::class);
Route::resource('user', UserController::class);

Route::get('login', [LoginController::class, 'viewLogin'])->name('login');
Route::post('login-post', [LoginController::class, 'postLogin'])->name('login.post-login');