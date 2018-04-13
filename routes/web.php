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

Route::get('/cases', function () {
    return view('cases.index');
});

Route::get('/skills', function () {
    return view('skills.index');
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

