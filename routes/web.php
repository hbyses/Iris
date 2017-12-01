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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/hello', function () {
    return 'hello world';
});
*/

/*
Route::get('/about', function () {
    return view('pages.about');
});
*/

/*
Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});
*/

/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' with an ID of '.$id;
});
*/

// Root
Route::get('/', 'PagesController@index');

// Auth Pages
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::get('/forgotten', 'AuthController@resetpw');
Route::get('/lock', 'AuthController@lock');

// Equipment Pages
Route::get('/equipment', 'EquipmentController@list');
Route::get('/equipment/groups', 'EquipmentController@groups');
Route::get('/equipment/locations', 'EquipmentController@locations');
Route::get('/equipment/suppliers', 'EquipmentController@suppliers');

// Fleet Pages
Route::get('/vehicles', 'FleetController@vehicles');
Route::get('/vehicles/vel', 'FleetController@vel');
Route::get('/vehicles/bookings', 'FleetController@bookings');

// Calendar
Route::get('/calendar/{filter?}', 'CalendarController@index');

// Dashboards
Route::get('/dashboards/{area?}', 'DashboardController@index');

// Auth / User Profile / Tasks
Route::get('/tasks/{username?}', 'ProfileController@tasks');
Route::get('/profile', 'ProfileController@profile');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
