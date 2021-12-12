<?php

use Illuminate\Support\Facades\Route;
use App\Models\Womentshirt;
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


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

//Route::get('/category/women-tshirt', [App\Http\Controllers\ProductsController::class,'index']);
//Route::get('/men-tshirt', [App\Http\Controllers\ProductsController::class, 'index']);
//Route::get('/detail/{product}', [App\Http\Controllers\ProductsController::class, 'show']);
//
Route::post('/admin/product/women/tshirt', [App\Http\Controllers\AdminsController::class, 'store']);
////Route::post ('/add-customer', [App\Http\Controllers\AdminsController::class, 'store']);


Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'show']);
//Route::get('/admin/product/women/tshirt', [App\Http\Controllers\AdminsController::class, 'edit']);
Route::get('/admin/customer', [App\Http\Controllers\AdminsController::class, 'index']);

//women tshirt
Route::get('/category/womentshirt',[App\Http\Controllers\WomentshirtController::class, 'index']);

Route::get('/womentshirt',[App\Http\Controllers\WomentshirtController::class, 'adminindex']);
Route::get('/womentshirt/create',[App\Http\Controllers\WomentshirtController::class, 'create']);
Route::post('/womentshirt',[App\Http\Controllers\WomentshirtController::class, 'store']);
Route::get('/womentshirt/{womentshirt}',[App\Http\Controllers\WomentshirtController::class, 'show']);
Route::get('/womentshirt/{womentshirt}/edit',[App\Http\Controllers\WomentshirtController::class, 'edit']);
Route::patch('/womentshirt/{womentshirt}',[App\Http\Controllers\WomentshirtController::class, 'update']);
Route::delete('/womentshirt/{womentshirt}',[App\Http\Controllers\WomentshirtController::class, 'destroy']);

//women lehenga
Route::get('/category/womenlehenga',[App\Http\Controllers\WomenlehengaController::class, 'index']);

Route::get('/womenlehenga',[App\Http\Controllers\WomenlehengaController::class, 'adminindex']);
Route::get('/womenlehenga/create',[App\Http\Controllers\WomenlehengaController::class, 'create']);
Route::post('/womenlehenga',[App\Http\Controllers\WomenlehengaController::class, 'store']);
Route::get('/womenlehenga/{womenlehenga}',[App\Http\Controllers\WomenlehengaController::class, 'show']);
Route::get('/womenlehenga/{womenlehenga}/edit',[App\Http\Controllers\WomenlehengaController::class, 'edit']);
Route::patch('/womenlehenga/{womenlehenga}',[App\Http\Controllers\WomenlehengaController::class, 'update']);
Route::delete('/womenlehenga/{womenlehenga}',[App\Http\Controllers\WomenlehengaController::class, 'destroy']);
