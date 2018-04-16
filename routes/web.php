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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/team', 'PagesController@team')->name('team');


Route::get('/cases', 'CasesController@index');

Route::get('/products', 'ProductsController@index');

Route::get('/skills', 'SkillsController@index');

Route::resource('profile', 'ProfileController');

