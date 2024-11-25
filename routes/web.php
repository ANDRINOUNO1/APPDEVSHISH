<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SecondPageController;
use App\Http\Controllers\BookingController;
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
})->name('index');
Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/check-in', function () {
    return view('CheckingIn');
})->name('check-in');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); 
})->name('logout');
Route::get('/booking/form', [BookingController::class, 'showForm'])->name('booking.form');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin', [LoginController::class, 'adminDashboard'])->middleware('auth')->name('admin');
Route::get('/frontdesk-dashboard', [LoginController::class, 'frontdeskDashboard'])->middleware('auth')->name('frontdesk-dashboard');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/secondPage',[SecondPageController::class,'index'])->name('secondPage');
Route::get('/welcome',[SecondPageController::class,'home'])->name('welcome');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('booking/receipt/{id}', [BookingController::class, 'receipt'])->name('booking.receipt');
Route::post('/process-payment', [BookingController::class, 'processPayment'])->name('process.payment');