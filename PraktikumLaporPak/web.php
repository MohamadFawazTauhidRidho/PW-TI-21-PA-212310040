<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'Home']);
Route::get('/home/about', [HomeController::class, 'About']);
Route::get('/home/pengaduan', [HomeController::class, 'Pengaduan']);