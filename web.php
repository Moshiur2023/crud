<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::post('/create',[HomeController::class, 'create'])->name('create');
Route::get('/all-student',[HomeController::class, 'allStudent'])->name('all.student');
Route::get('/edit/{id}',[HomeController::class, 'edit'])->name('edit');
Route::get('/delete/{id}',[HomeController::class, 'delete'])->name('delete');
Route::post('/update',[HomeController::class, 'update'])->name('update');




Route::get('/category',[CategoryController::class, 'index'])->name('category');
Route::post('/category-create',[CategoryController::class, 'saveCategory'])->name('category.create');
Route::get('/all-category',[CategoryController::class, 'allCategory'])->name('all.category');
Route::get('/status/{id}',[CategoryController::class, 'status'])->name('status');
Route::get('/category-edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category-update',[CategoryController::class, 'update'])->name('category.update');
//Route::get('/category-delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
Route::post('/category-delete',[CategoryController::class, 'delete'])->name('category.delete');


Route::get('/brand', [BrandController::class, 'index'])->name('brand');
Route::post('/brand-create',[BrandController::class, 'saveBrand'])->name('brand.create');
Route::get('/all-brand', [BrandController::class, 'allBrand'])->name('all.brand');
Route::get('/brand-status/{id}',[BrandController::class, 'status'])->name('status');
Route::get('/brand-edit/{id}',[BrandController::class, 'edit'])->name('brand.edit');
Route::post('/brand-update',[BrandController::class, 'update'])->name('brand.update');
//Route::get('/brand-delete/{id}',[BrandController::class, 'delete'])->name('brand.delete');
Route::post('/brand-delete',[BrandController::class, 'delete'])->name('brand.delete');

Route::resource('products', ProductController::class);
