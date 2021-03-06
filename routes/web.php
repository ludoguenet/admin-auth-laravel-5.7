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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes
Route::namespace('Admin')->group(function() {
    Route::get('/admin/login', 'Auth\\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\\LoginController@login');

    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
});
