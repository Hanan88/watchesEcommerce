<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
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

Route::view('about', 'about')->name('about');
Route::view('shop', 'shop')->name('shop');
Route::view('contact', 'contact')->name('contact');
Route::view('admin/admin', 'admin')->name('admin');


// Language

Route::get('/language/{locale}', [MainController::class, 'language'])->name('language');

//
// ****** Show Product to user ******
//
Route::get('shop', [ProductController::class, 'show_products'])->name('shop');

Route::middleware(['admin'])->prefix('/admin')->group(function(){
  //
  // ****** Product ******
  //
  Route::get('admin/product', [ProductController::class, 'get_products'])->name('get_products');

  Route::get('admin/view_product', [ProductController::class, 'view_product'])->name('view_product');
  Route::post('admin/add_product', [ProductController::class, 'add_product'])->name('add_product');

  Route::get('admin/view_edit_product/{id}', [ProductController::class, 'view_edit_product'])->name('view_edit_product');
  Route::post('admin/update_product/{id}', [ProductController::class, 'update_product'])->name('update_product');

  Route::get('admin/delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product');

//
// ****** Brand ******
//
  Route::get('admin/brand', [BrandController::class, 'get_brands'])->name('get_brands');

  Route::get('admin/view_brand', [BrandController::class, 'view_brand'])->name('view_brand');
  Route::post('admin/add_brand', [BrandController::class, 'add_brand'])->name('add_brand');

  Route::get('admin/view_edit_brand/{id}', [BrandController::class, 'view_edit_brand'])->name('view_edit_brand');
  Route::post('admin/update_brand/{id}', [BrandController::class, 'update_brand'])->name('update_brand');

  Route::get('admin/delete_brand/{id}', [BrandController::class, 'delete_brand'])->name('delete_brand');
//
// ****** Category ******
//
  Route::get('admin/category',[CategoryController::class, 'get_categories'])->name('get_categories');

  Route::get('admin/view_category', [CategoryController::class, 'view_category'])->name('view_category');
  Route::post('admin/add_category', [CategoryController::class, 'add_category'])->name('add_category');

  Route::get('admin/view_edit_category/{id}', [CategoryController::class, 'view_edit_category'])->name('view_edit_category');
  Route::post('admin/update_category/{id}',[CategoryController::class, 'update_category'])->name('update_category');

  Route::get('admin/delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
