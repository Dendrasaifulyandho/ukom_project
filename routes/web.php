<?php

use App\Http\Controllers\admin as ControllersAdmin;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pmmobilController;
use App\Models\admin;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('dashboard.index');
// });
// Route::get('/', function () {
//     return view('mobil.index');
// });

Route::get('/', [dashboardController::class, 'index']);
Route::get('/pmmobil', [pmmobilController::class, 'index']);
Route::get('/admin', [adminController::class, 'index']);
