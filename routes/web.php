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
| Source Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/dashboard/create', [DashboardController::class, 'create']);

Route::post('/dashboard/store', [DashboardController::class, 'store']);

Route::get('/dashboard/edit', [DashboardController::class, 'show']);

Route::get('/dashboard/update', [DashboardController::class, 'edit']);

Route::get('/dashboard/destroy', [DashboardController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Source Fish Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/perikanan', [FishController::class, 'index']);

Route::get('/perikanan/create', [FishController::class, 'create']);

Route::post('/perikanan/store', [FishController::class, 'store']);

Route::get('/perikanan/show/', [FishController::class, 'show']);

Route::get('/perikanan/edit/{slug_ikan}', [FishController::class, 'edit']);

Route::get('/perikanan/update/{slug_ikan}', [FishController::class, 'update']);

Route::get('/perikanan/destroy/{slug_ikan}', [FishController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Source Penjadwalan Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/penjadwalan', [ScheduleController::class, 'index']);

Route::get('/penjadwalan/create', [ScheduleController::class, 'create']);

Route::post('/penjadwalan/store', [ScheduleController::class, 'store']);

Route::get('/penjadwalan/edit/{slug_jadwal}', [ScheduleController::class, 'edit']);

Route::post('/penjadwalan/update/{slug_jadwal}', [ScheduleController::class, 'update']);

Route::get('/penjadwalan/destroy/{slug_jadwal}', [ScheduleController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Source Penjualan Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/penjualan', [SalesController::class, 'index']);

Route::post('/penjualan/create', [SalesController::class, 'create']);

Route::get('/penjualan/store', [SalesController::class, 'store']);

Route::get('/penjualan/edit', [SalesController::class, 'show']);

Route::get('/penjualan/update', [SalesController::class, 'edit']);

Route::get('/penjualan/destroy', [SalesController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Source Laporan Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laporan', [ReportController::class, 'index']);

Route::post('/laporan/create', [ReportController::class, 'create']);

Route::get('/laporan/store', [ReportController::class, 'store']);

Route::get('/laporan/edit', [ReportController::class, 'show']);

Route::get('/laporan/update', [ReportController::class, 'edit']);

Route::get('/laporan/destroy', [ReportController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Source Pengaturan Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pengaturan', [SettingController::class, 'index']);

Route::post('/pengaturan/create', [SettingController::class, 'create']);

Route::get('/pengaturan/store', [SettingController::class, 'store']);

Route::get('/pengaturan/edit', [SettingController::class, 'show']);

Route::get('/pengaturan/update', [SettingController::class, 'edit']);

Route::get('/pengaturan/destroy', [SettingController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Source Pengguna Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pengguna', [UserController::class, 'index']);

Route::get('/pengguna/create', [UserController::class, 'create']);

Route::post('/pengguna/store', [UserController::class, 'store']);

Route::get('/pengguna/edit/{slug_pengguna}', [UserController::class, 'edit']);

Route::post('/pengguna/update/{slug_pengguna}', [UserController::class, 'update']);

Route::get('/pengguna/destroy/{slug_pengguna}', [UserController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Source Riwayat Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/riwayat', [HistoryController::class, 'index']);

Route::post('/riwayat/create', [HistoryController::class, 'create']);

Route::get('/riwayat/store', [HistoryController::class, 'store']);

Route::get('/riwayat/edit', [HistoryController::class, 'show']);

Route::get('/riwayat/update', [HistoryController::class, 'edit']);

Route::get('/riwayat/destroy', [HistoryController::class, 'destroy']);