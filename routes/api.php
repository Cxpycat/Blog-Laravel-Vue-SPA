<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api', 'prefix' => 'auth', 'namespace' => 'App\Http\Controllers'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

//    Route::group(['namespace' => 'Fruit', 'prefix' => 'fruits'], function () {
//        Route::get('/fruits', 'IndexController');
//    });
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace' => 'App\Http\Controllers\User', 'prefix' => 'users'], function () {
    Route::post('/users', 'StoreController');
});

Route::group(['namespace' => 'App\Http\Controllers\Image', 'prefix' => 'image'], function () {
    Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', 'IndexController');
        Route::get('/{category}', 'ShowController');
        Route::post('/', 'StoreController');
        Route::patch('/{category}', 'UpdateController');
        Route::delete('/{category}', 'DeleteController');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
        Route::get('/', 'IndexController');
        Route::get('/{post}', 'ShowController');
        Route::post('/', 'StoreController');
        Route::patch('/{post}', 'UpdateController');
        Route::delete('/{post}', 'DeleteController');
    });
});


