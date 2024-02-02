<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pmmobilController;
use App\Http\Controllers\LoginController;

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
// routes/web.php

// Route untuk menampilkan form login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

// // Route untuk proses autentikasi login
// Route::post('/login', 'Auth\LoginController@login');

// // Route untuk proses logout
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

