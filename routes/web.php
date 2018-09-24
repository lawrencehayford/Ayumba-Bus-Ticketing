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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'AdminController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

//admin section
Route::get('/adminbushome', 'AdminController@gotobus')->name('adminbushome');
Route::get('/admintaxihome', 'AdminController@gototaxi')->name('admintaxihome');

//bus
Route::post('addbuscompany', 'BusController@addbuscompany')->name('addbuscompany');
Route::post('add-bus-user', 'BusController@addbususer')->name('addbususer');

//Bus agent
Route::get('view-bus-booking/{companyid}/', 'BusController@viewbusbooking')->name('view-bus-booking');
Route::get('view-routes/{companyid}/', 'BusController@viewbusroutes')->name('view-routes');
//normal user section

//agent section
