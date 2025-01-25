<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SecondPageController;
use App\Http\Controllers\ThirdPageController;
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

Route::get('/admin', function () {
    return view('AdminPage');  // This refers to 'resources/views/AdminPage.blade.php'
})->name('admin');

Route::get('/frontdesk-dashboard', function () {
    return view('frontdesk-dashboard');  // This refers to 'resources/views/frontdesk-dashboard.blade.php'
})->name('frontdesk-dashboard');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/check-in', function () {
    return view('CheckIn');
})->name('check-in');
Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/secondPage',[SecondPageController::class,'index'])->name('secondPage');
Route::get('/welcome',[SecondPageController::class,'home'])->name('welcome');
Route::get('/room-rates', [RoomRateController::class, 'index']);
Route::get('/reservations/create/{room_rate_id}', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');