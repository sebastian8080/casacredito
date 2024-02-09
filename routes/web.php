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
Route::get('/sobre-nosotros', [WebController::class, 'about'])->name('web.about');
Route::get('/avaluo-de-propiedad', [WebController::class, 'avaluo'])->name('web.avaluo');
Route::get('/contacto', [WebController::class, 'contacto'])->name('web.contacto');

//CREDITOS
Route::get('/creditos-hipotecarios', [WebController::class, 'creditos_hipotecarios'])->name('web.creditos.hipoetacarios');
Route::get('/credito-vip', [WebController::class, 'vip'])->name('web.credito.vip');
Route::get('/creditos-de-consumo', [WebController::class, 'consumo'])->name('web.credito.consumo');
Route::get('creditos-de-construccion', [WebController::class, 'construccion'])->name('web.credito.construccion');
Route::get('/creditos-de-consumo-hipotecario', [WebController::class, 'consumo_hipotecario'])->name('web.credito.consumo.hipotecario');
Route::get('/microcreditos', [WebController::class, 'microcreditos'])->name('web.microcreditos');

Route::get('/tabla-de-amortizacion', [WebController::class, 'amortizacion'])->name('web.amortizacion');
Route::get('/getcities/{idState}', [WebController::class, 'getcities'])->name('getcities');
Route::post('/sendlead', [WebController::class, 'sendlead'])->name('sendlead');

Auth::routes();


// Route::middleware(['auth'])->prefix('home')->group(function(){
    
//     Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
//     //BLOG
//     Route::get('/blog', [App\Http\Controllers\ArticleController::class, 'index'])->name('home.blog');
//     Route::get('/blog/create', [App\Http\Controllers\ArticleController::class, 'create'])->name('home.blog.create');
//     Route::post('/blog/store', [App\Http\Controllers\ArticleController::class, 'store'])->name('home.blog.store');
//     Route::get('/blog/edit/{article}', [\App\Http\Controllers\ArticleController::class, 'edit'])->name('home.blog.edit');
//     Route::post('/blog/edit/update/{article}', [\App\Http\Controllers\ArticleController::class, 'update'])->name('home.blog.update');

// });
