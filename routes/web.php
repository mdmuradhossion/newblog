<?php

use App\Http\Controllers\FrontController;
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

//Route::get('/', function () {
//   // return view('welcome');
//
//});

Auth::routes();
Route::get('/', [FrontController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/flash', [App\Http\Controllers\HomeController::class, 'flash']);

//Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.list');
//Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
