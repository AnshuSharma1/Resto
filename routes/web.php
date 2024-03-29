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

Route::get('/reservations', function () {
    return view('reservation');

});
Route::post('/reservations', 'ReservationController@create');
Route::post('/contact', 'ContactController@create')->name('contact.post');


Route::get('/order','OrderController@index')->name('order');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/menu', 'MenuitemController@index')->name('admin.menu');
Route::post('/admin/menu', 'MenuitemController@store')->name('admin.menu.submit');

Route::get('/admin/reservations','ReservationController@index')->name('admin.reservations');
Route::post('/admin/reservations/{rid}','ReservationController@update')->name('admin.reservations.update');

Route::get('/admin/feedback','ContactController@index')->name('admin.contact');

Route::get('/admin/users','AdminController@users')->name('admin.users');

Route::resource('/cart','CartController');

Route::group(['middleware' => 'auth'],function()
{
	Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
	Route::post('checkout-store','CheckoutController@store')->name('checkout.store');
});

Route::group(['middleware' => 'auth:admin'],function()
{
	Route::get('/admin/order','OrderController@show')->name('admin.order');
	Route::post('/admin/order/{orderid}','OrderController@update')->name('admin.order.update');
});





