<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\StockController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SettingController;




/*
|--------------------------------------------------------------------------
| SOURCE OF UTILITIES
|--------------------------------------------------------------------------
|
| Here is where you can register web routes source of utilities for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// GETTING STARTED PAGE
Route::get('/', [UtilitiesController::class, 'index'])->name('login');

Route::get('/register', [UtilitiesController::class, 'register']);
Route::post('/registore', [UtilitiesController::class, 'registore']);

// AUTHENTICATE
Route::post('/login', [UtilitiesController::class, 'authenticate']);

// LOGOUT
Route::get('/logout', [UtilitiesController::class, 'logout']);

// ALL CHART PAGE
Route::get('/mychart', [UtilitiesController::class, 'chart'])->middleware('auth');

// PRINT CHART
Route::get('/mychart/print', [UtilitiesController::class, 'printstore'])->middleware('auth');




/*
|--------------------------------------------------------------------------
| Source Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard/admin', [DashboardController::class, 'index'])->middleware('auth');

Route::post('/dashboard/admin/create', [DashboardController::class, 'create'])->middleware('auth');

Route::post('/dashboard/admin/store', [DashboardController::class, 'store'])->middleware('auth');

Route::get('/dashboard/admin/edit', [DashboardController::class, 'show'])->middleware('auth');

Route::get('/dashboard/admin/update', [DashboardController::class, 'edit'])->middleware('auth');

Route::get('/dashboard/admin/destroy', [DashboardController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Source Fish Routes
|--------------------------------------------------------------------------
*/

Route::get('/perikanan', [FishController::class, 'index'])->middleware('auth');

Route::get('/perikanan/create', [FishController::class, 'create'])->middleware('auth');

Route::post('/perikanan/store', [FishController::class, 'store'])->middleware('auth');

Route::get('/perikanan/show/', [FishController::class, 'show'])->middleware('auth');

Route::get('/perikanan/edit/{slug_ikan}', [FishController::class, 'edit'])->middleware('auth');

Route::get('/perikanan/update/{slug_ikan}', [FishController::class, 'update'])->middleware('auth');

Route::get('/perikanan/destroy/{slug_ikan}', [FishController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Source Penjadwalan Routes
|--------------------------------------------------------------------------
*/

Route::get('/penjadwalan', [ScheduleController::class, 'index'])->middleware('auth');

Route::get('/penjadwalan/create', [ScheduleController::class, 'create'])->middleware('auth');

Route::post('/penjadwalan/store', [ScheduleController::class, 'store'])->middleware('auth');

Route::get('/penjadwalan/edit/{slug_jadwal}', [ScheduleController::class, 'edit'])->middleware('auth');

Route::post('/penjadwalan/update/{slug_jadwal}', [ScheduleController::class, 'update'])->middleware('auth');

Route::get('/penjadwalan/destroy/{slug_jadwal}', [ScheduleController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Source Penjualan Routes
|--------------------------------------------------------------------------
*/

Route::get('/penjualan', [SalesController::class, 'index'])->middleware('auth');

Route::get('/penjualan/income/create/', [SalesController::class, 'increate'])->middleware('auth');

Route::post('/penjualan/income/store', [SalesController::class, 'instore'])->middleware('auth');

Route::get('/penjualan/income/edit/{slug_pemasukan}', [SalesController::class, 'inedit'])->middleware('auth');

Route::post('/penjualan/income/update/{slug_pemasukan}', [SalesController::class, 'inupdate'])->middleware('auth');

Route::get('/penjualan/income/destroy/{slug_pemasukan}', [SalesController::class, 'indestroy'])->middleware('auth');


Route::get('/penjualan', [SalesController::class, 'index'])->middleware('auth');

Route::get('/penjualan/expense/create/', [SalesController::class, 'excreate'])->middleware('auth');

Route::post('/penjualan/expense/store', [SalesController::class, 'exstore'])->middleware('auth');

Route::get('/penjualan/expense/edit/{slug_pengeluaran}', [SalesController::class, 'exedit'])->middleware('auth');

Route::post('/penjualan/expense/update/{slug_pengeluaran}', [SalesController::class, 'exupdate'])->middleware('auth');

Route::get('/penjualan/expense/destroy/{slug_pengeluaran}', [SalesController::class, 'exdestroy'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Source Laporan Routes
|--------------------------------------------------------------------------
*/

Route::get('/stock', [StockController::class, 'index'])->middleware('auth');

Route::post('/stock/create', [StockController::class, 'create'])->middleware('auth');

Route::get('/stock/store', [StockController::class, 'store'])->middleware('auth');

Route::get('/stock/edit', [StockController::class, 'show'])->middleware('auth');

Route::get('/stock/update', [StockController::class, 'edit'])->middleware('auth');

Route::get('/stock/destroy', [StockController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Source Pengaturan Routes
|--------------------------------------------------------------------------
*/

Route::get('/pengaturan', [SettingController::class, 'index'])->middleware('auth');

Route::post('/pengaturan/create', [SettingController::class, 'create'])->middleware('auth');

Route::get('/pengaturan/store', [SettingController::class, 'store'])->middleware('auth');

Route::get('/pengaturan/edit', [SettingController::class, 'show'])->middleware('auth');

Route::get('/pengaturan/update', [SettingController::class, 'edit'])->middleware('auth');

Route::get('/pengaturan/destroy', [SettingController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Source Pengguna Routes
|--------------------------------------------------------------------------
*/

Route::get('/pengguna', [UserController::class, 'index'])->middleware('auth');

Route::get('/pengguna/create', [UserController::class, 'create'])->middleware('auth');

Route::post('/pengguna/store', [UserController::class, 'store'])->middleware('auth');

Route::get('/pengguna/edit/{slug_pengguna}', [UserController::class, 'edit'])->middleware('auth');

Route::post('/pengguna/update/{slug_pengguna}', [UserController::class, 'update'])->middleware('auth');

Route::get('/pengguna/destroy/{slug_pengguna}', [UserController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Source Riwayat Routes
|--------------------------------------------------------------------------
*/

Route::get('/riwayat', [HistoryController::class, 'index'])->middleware('auth');

Route::post('/riwayat/create', [HistoryController::class, 'create'])->middleware('auth');

Route::get('/riwayat/store', [HistoryController::class, 'store'])->middleware('auth');

Route::get('/riwayat/edit', [HistoryController::class, 'show'])->middleware('auth');

Route::get('/riwayat/update', [HistoryController::class, 'edit'])->middleware('auth');

Route::get('/riwayat/destroy', [HistoryController::class, 'destroy'])->middleware('auth');



/*
|--------------------------------------------------------------------------
| SOURCE OF CUSTOMER / CLIENT
|--------------------------------------------------------------------------
|
| Here is where you can register web routes source of utilities for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Source Home User Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard/user', [DashboardController::class, 'customer_index'])->middleware('auth');

Route::post('/dashboard/user/create', [DashboardController::class, 'customer_create'])->middleware('auth');

Route::post('/dashboard/user/store', [DashboardController::class, 'store'])->middleware('auth');

Route::get('/dashboard/user/edit', [DashboardController::class, 'show'])->middleware('auth');

Route::get('/dashboard/user/update', [DashboardController::class, 'edit'])->middleware('auth');

Route::get('/dashboard/user/destroy', [DashboardController::class, 'destroy'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Source Home User Routes
|--------------------------------------------------------------------------
*/

Route::get('/history/user', [HistoryController::class, 'customer_index'])->middleware('auth');

Route::post('/history/user/create', [HistoryController::class, 'customer_create'])->middleware('auth');

Route::post('/history/user/store', [HistoryController::class, 'customer_store'])->middleware('auth');

Route::get('/history/user/edit', [HistoryController::class, 'customer_show'])->middleware('auth');

Route::get('/history/user/update', [HistoryController::class, 'customer_edit'])->middleware('auth');

Route::get('/history/user/destroy', [HistoryController::class, 'customer_destroy'])->middleware('auth');
