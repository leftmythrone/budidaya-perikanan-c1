<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SettingController;





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

Route::get('/dashboard', [UtilitiesController::class, 'index']);

Route::post('/dashboard/create', [UtilitiesController::class, 'create']);

Route::get('/dashboard/store', [UtilitiesController::class, 'store']);

Route::get('/dashboard/edit', [UtilitiesController::class, 'show']);

Route::get('/dashboard/update', [UtilitiesController::class, 'edit']);

Route::get('/dashboard/destroy', [UtilitiesController::class, 'destroy']);

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

Route::post('/perikanan/create', [FishController::class, 'create']);

Route::get('/perikanan/store', [FishController::class, 'store']);

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

Route::post('/penjadwalan/create', [ScheduleController::class, 'create']);

Route::get('/penjadwalan/store', [ScheduleController::class, 'store']);

Route::get('/penjadwalan/edit', [ScheduleController::class, 'show']);

Route::get('/penjadwalan/update', [ScheduleController::class, 'edit']);

Route::get('/penjadwalan/destroy', [ScheduleController::class, 'destroy']);

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

Route::post('/pengguna/create', [UserController::class, 'create']);

Route::get('/pengguna/store', [UserController::class, 'store']);

Route::get('/pengguna/edit', [UserController::class, 'show']);

Route::get('/pengguna/update', [UserController::class, 'edit']);

Route::get('/pengguna/destroy', [UserController::class, 'destroy']);

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