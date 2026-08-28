<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Nusantara Restaurant Admin Dashboard
|--------------------------------------------------------------------------
*/

// 1. Landing Page Restoran & Auth Login
Route::get('/', function () { return view('login'); });
Route::get('/login', function () { return view('login'); })->name('login');
Route::get('/utama', function () { return view('utama'); })->name('utama');
Route::get('/book', function () { return view('book'); })->name('book');
Route::get('/thankbook', function () { return view('thankbook'); })->name('thankbook');

// 2. Dashboard Admin Utama
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// 3. Master Menu Makanan & Minuman
use App\Http\Controllers\MenuController;

Route::get('/Menulist', [MenuController::class, 'index'])->name('Menulist');
Route::get('/menus', [MenuController::class, 'index'])->name('menus');
Route::get('/Categories', [MenuController::class, 'index'])->name('Categories');
Route::get('/Addmenu', [MenuController::class, 'index'])->name('Addmenu');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::patch('/menu/{id}/status', [MenuController::class, 'updateStatus'])->name('menu.status');
Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

// 4. Fitur Reservasi Meja Restoran
use App\Http\Controllers\ReservationController;

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::post('/book/store', [ReservationController::class, 'store'])->name('book.store');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::patch('/reservation/{id}/approve', [ReservationController::class, 'approve'])->name('reservation.approve');
Route::patch('/reservation/{id}/reject', [ReservationController::class, 'reject'])->name('reservation.reject');
Route::delete('/reservation/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');


// 5. Fitur Karyawan & Presensi Staff
use App\Http\Controllers\KaryawanController;

Route::get('/employeelist', [KaryawanController::class, 'index'])->name('employeelist');
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
Route::get('/attedance', [KaryawanController::class, 'index'])->name('attedance');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::patch('/karyawan/{id}/status', [KaryawanController::class, 'updateStatus'])->name('karyawan.status');
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

// 6. Laporan Penjualan (Sales Report with Dummy Data - No DB Table Needed)
Route::get('/Salesreport', function () { return view('laporanpesanan'); })->name('Salesreport');
Route::get('/laporan', function () { return view('laporanpesanan'); })->name('laporan');
Route::get('/laporanpenjualan', function () { return view('laporanpesanan'); })->name('laporanpenjualan');

// 7. Manajemen Meja & Transaksi Dapur
Route::get('/Tabellist', function () { return view('pages.orders'); })->name('Tabellist');
Route::get('/table', function () { return view('pages.orders'); })->name('table');
Route::get('/Transactions', function () { return view('pages.orders'); })->name('Transactions');

// 8. Profile & Administrasi
Route::get('/profile', function () { return view('profile'); })->name('profile');
Route::get('/Adminlist', function () { return view('Adminlist'); })->name('Adminlist');
Route::get('/roles', function () { return view('roles'); })->name('roles');
Route::get('/activity', function () { return view('activity'); })->name('activity');
Route::get('/register', function () { return view('register'); })->name('register');
Route::get('/forgot', function () { return view('forgot'); })->name('forgot');
