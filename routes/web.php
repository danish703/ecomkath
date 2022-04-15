<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CategoryController;
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

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/shirts',[FrontController::class,'shirts'])->name('shirts');
Route::get('/shirt',[FrontController::class,'shirt'])->name('shirt');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
   Route::get('/',function(){
        return view('admin.index');
   })->name('admin.index');
  
   Route::resource('category',CategoryController::class);
   Route::resource('product',ProductController::class);
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
