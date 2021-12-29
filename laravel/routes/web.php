<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CacheController;
use App\Http\Controllers\SessionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example-cache', [CacheController::class, 'index']);

Route::get('/example-session', [SessionController::class, 'index']);
