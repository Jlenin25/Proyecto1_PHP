<?php

use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class);

Route::get('servicios', [ServiciosController::class, 'index']);

Route::get('servicios/create', [ServiciosController::class, 'create']);

Route::get('servicios/{servicio}', [ServiciosController::class, 'show']);