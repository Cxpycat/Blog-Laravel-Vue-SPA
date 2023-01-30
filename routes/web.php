<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
Route::get('/admin/{name}', AdminController::class)->where([

    'name' => '.*'

]);
Route::get('/{page}', IndexController::class)->where('page', '.*');


//Route::get('/', IndexController::class)->name('main.index');
//
//
//Route::group(['namespace' => 'App\Http\Controllers\User', 'prefix' => 'user'], function () {
//    Route::get('/profile', 'IndexController')->name('profile.index');
//});
//
//
//Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
//    Route::get('/', 'IndexController')->name('admin.index');
//    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
//        Route::get('/', 'IndexController')->name('admin.category.index');
//        Route::get('/create', 'CreateController')->name('admin.category.index');
//        Route::get('/{category}/show', 'ShowController')->name('admin.category.show');
//    });
//});
