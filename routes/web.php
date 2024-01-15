<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebController::class, 'home'])->name('web.home');
Route::get('/creditos', [WebController::class, 'creditos'])->name('web.creditos');
Route::get('/getcities/{idState}', [WebController::class, 'getcities'])->name('getcities');
Route::post('/sendlead', [WebController::class, 'sendlead'])->name('sendlead');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
