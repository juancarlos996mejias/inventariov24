<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PanolController;
use App\Http\Controllers\GriferiaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});






Route::resource('products',ProductController::class);
Auth::routes();

Route::resource('panols',PanolController::class);
Auth::routes();


Route::resource('griferia',GriferiaController::class);
Auth::routes();



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/griferia', [GriferiaController::class, 'index'])->name('griferia');





















/*Route::get('/panol',[App\Http\Controllers\PanolController::class,'index'])->name('panol');

Route::get('/panols',[App\Http\Controllers\PanolController::class,'index'])->name('panol');

Route::get('/product',[App\Http\Controllers\ProductController::class,'index'])->name('product');

Route::get('/panols',[App\Http\Controllers\PanolController::class,'index'])->name('panols.index');

Route::get('/panol',[App\Http\Controllers\PanolController::class,'index'])->name('panol.show');

Route::get('/products',[App\Http\Controllers\ProductController::class,'show'])->name('products.show');*/




