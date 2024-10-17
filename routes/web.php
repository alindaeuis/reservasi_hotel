<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\HotelRoomController;
use App\Http\Controllers\ReservationController;
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
Route::get('/', function(){
  return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/admin_page', [AdminPageController::class, 'index'])->name('admin_page');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('hotel_room')->name('hotel_room.')->group( function() {
  Route::get('/data', [HotelRoomController::class, 'index'])->name('data');
  Route::get('/add', [HotelRoomController::class, 'create'])->name('add');
  Route::post('/add/process', [HotelRoomController::class, 'store'])->name('add.process');
  Route::delete('/delete/{id}', [HotelRoomController::class, 'destroy'])->name('delete');
  Route::get('/ubah/{id}', action: [HotelRoomController::class, 'edit'])->name('edit');
  Route::patch('/edit/process/{id}', [HotelRoomController::class, 'update'])->name('edit.process');
});

Route::prefix('hotel_reservation')->name('hotel_reservation.')->group( function() {
  Route::get('/data', [ReservationController::class, 'index'])->name('data');
  Route::get('/add', [ReservationController::class, 'create'])->name('add');
  Route::post('/add/process', [ReservationController::class, 'store'])->name('add.process');
  Route::get('/edit/{id}', [ReservationController::class, 'edit'])->name('edit');
  Route::post('/edit/process/{id}', [ReservationController::class, 'update'])->name('edit.process');
  Route::delete('/delete', [ReservationController::class, 'destroy'])->name('delete');

});

