<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PetController;
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

Route::get('/', 'App\Http\Controllers\PetController@petList')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('pets', ['as' => 'pets', 'uses' => 'App\Http\Controllers\PetController@petList']);;
	Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
	Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
	Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
	Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
	Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

