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

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservations', 'ReservationController@reserve');
Route::post('/reservations', 'ReservationController@create');

Route::get('/order','OrderController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/menu', 'MenuitemController@index')->name('admin.menu');
Route::post('/admin/menu', 'MenuitemController@create')->name('admin.menu.submit');
Route::get('/admin/reservations','ReservationController@index')->name('admin.reservations');
Route::get('/admin/users','Auth\RegisterController@index')->name('admin.users');

