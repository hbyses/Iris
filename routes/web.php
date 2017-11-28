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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::get('/forgotten', 'AuthController@resetpw');
Route::get('/lock', 'AuthController@lock');
Route::get('/equipment', 'EquipmentController@index');