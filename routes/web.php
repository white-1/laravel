<?php

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
    // \Log::debug(env('APP_ENV'));
    // \Log::debug(config('APP_ENV'));
    var_dump(env('APP_ENV'));  // production
    var_dump(config('APP_ENV'));  // NULL

    return 'Hello laravel!';
    // return view('welcome');
});

// For heroku
Route::get( '/_debugbar/assets/stylesheets', '\Barryvdh\Debugbar\Controllers\AssetController@css' );
Route::get( '/_debugbar/assets/javascript', '\Barryvdh\Debugbar\Controllers\AssetController@js' );
