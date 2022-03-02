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
Route::get('admin/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::post('admin/category/edit-action', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.edit.action');
Route::get('admin/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');




//all blog
Route::get('admin/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.list');
Route::get('admin/blog-create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.add');
Route::post('admin/blog/create-action', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.action');
Route::get('admin/blog-edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::post('admin/blog/update-action', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update.action');
Route::get('admin/blog-delete/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.delete');
Route::get('admin/blog/status-action', [App\Http\Controllers\BlogController::class, 'status_update'])->name('blog.status.change');


//All gallery
Route::post('admin/gallery-action', [App\Http\Controllers\FileUploadController::class, 'store'])->name('gallery.action');
Route::get('admin/gallery-image', [App\Http\Controllers\FileUploadController::class, 'show'])->name('gallery.image');
Route::post('admin/choose/gallery-image', [App\Http\Controllers\FileUploadController::class, 'choose'])->name('choose.gallery.image');


//website settings
Route::get('admin/website-settings', [App\Http\Controllers\WebsiteSettingsController::class, 'index'])->name('web.settings');
Route::post('admin/menu-add', [App\Http\Controllers\WebsiteSettingsController::class, 'menu_create'])->name('menu.action');
Route::get('admin/menu/status-action', [App\Http\Controllers\WebsiteSettingsController::class, 'status_update'])->name('menu.status-action');
Route::get('admin/menu/menu-edit/{id}', [App\Http\Controllers\WebsiteSettingsController::class, 'menu_edit'])->name('menu.edit');
Route::post('admin/menu-update', [App\Http\Controllers\WebsiteSettingsController::class, 'menu_update'])->name('menu.update.action');

Route::get('admin/edit-page/{slug}', [App\Http\Controllers\WebsiteSettingsController::class, 'page_edit'])->name('edit.page');
Route::get('admin/menu-delete/{slug}', [App\Http\Controllers\WebsiteSettingsController::class, 'menu_delete'])->name('menu.delete');
Route::post('admin/web-logo-update', [App\Http\Controllers\WebsiteSettingsController::class, 'web_logo_update'])->name('web.logo.update');
Route::post('admin/web-slider-update', [App\Http\Controllers\WebsiteSettingsController::class, 'web_slider_update'])->name('web.slider.update');
