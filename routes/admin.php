<?php

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

Route::get('/cc', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');

    return back()->with('success','Clear cache successful!');;

});

Auth::routes();

Route::get('admin/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.list');
Route::get('admin/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('admin/category/create-action', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.create.action');

//all blog
Route::get('admin/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.list');
Route::get('admin/blog-create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.add');


Route::post('admin/gallery-action', [App\Http\Controllers\FileUploadController::class, 'store'])->name('gallery.action');
