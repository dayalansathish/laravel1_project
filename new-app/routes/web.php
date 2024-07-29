<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
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

Route::middleware('auth')->group(function () {
Route::get('/dashboard', function () {
    return view('pages.content');
})->name('dashboard');

Route::get('/ecommerce', function () {
    return view('pages.ecom');
})->name('ecommerce');

Route::get('/marketing', function () {
    return view('pages.market');
})->name('marketing');
});

Route::get('/login', [LoginController::class, 'login'])->name('account.login')->middleware('guest');
Route::post('/login', [LoginController::class, 'loginPost'])->name('account.loginProcess');

Route::get('/', [RegisterController::class, 'register'])->name('account.register')->middleware('guest');
Route::post('/', [RegisterController::class, 'registerPost'])->name('account.registerProcess');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
