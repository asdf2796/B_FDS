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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/test', function(){
	return view('test');
});

Route::get('/similarity', function(){
	return view('similarity');
});

Route::post('/similarity/check', 'customAlgorithmsController@calculateSimilarity');

Route::post('/similarity/scoring', 'customAlgorithmsController@scoring');

Route::post('/similarity/compare', 'customAlgorithmsController@compareValue');

Route::resource('products', 'ProductsController');

Route::resource('transactions', 'TransactionsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
