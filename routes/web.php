<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransactionController;


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

Route::get('/perikanan/edit', [FishController::class, 'show']);

Route::get('/perikanan/update', [FishController::class, 'edit']);

Route::get('/perikanan/destroy', [FishController::class, 'destroy']);

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

Route::get('/penjualan', [TransactionController::class, 'index']);

Route::post('/penjualan/create', [TransactionController::class, 'create']);

Route::get('/penjualan/store', [TransactionController::class, 'store']);

Route::get('/penjualan/edit', [TransactionController::class, 'show']);

Route::get('/penjualan/update', [TransactionController::class, 'edit']);

Route::get('/penjualan/destroy', [TransactionController::class, 'destroy']);

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