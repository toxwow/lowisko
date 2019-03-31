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


Route::get('/', 'HomeController@index') -> name('home');
Route::post('', 'HomeController@email');
Route::get('/restauracja', 'RestaurantController@index') -> name('restaurant');
Route::get('/lowisko', 'LowiskoController@index') -> name('lowisko');
Route::get('/o-nas', 'AboutController@index') -> name('about');
Route::get('/galeria', 'GalleryController@index') -> name('gallery');
Route::get('/kontakt', 'ContactController@index') -> name('contact');
Route::post('/kontakt', 'ContactController@email');

