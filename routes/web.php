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

Route::get('/compare', 'PagesController@compare');

Route::post('/similarity/check', 'customAlgorithmsController@calculateSimilarity');

Route::post('/similarity/scoring', 'customAlgorithmsController@scoring');

Route::post('/similarity/compare', 'customAlgorithmsController@compareValue');

Route::get('/transactions', 'TransactionsController@index');

Route::get('/transactions/sortBy/name', 'TransactionsController@sortByName');

Route::get('/transactions/sortBy/userId', 'TransactionsController@sortByUserId');

Route::get('/transactions/sortBy/promoCode', 'TransactionsController@sortByPromoCode');

Route::get('/transactions/promo/{promo_code}', 'TransactionsController@list');

Route::get('/transactions/download', 'TransactionsController@getExcel');

Route::get('/transactions/process', 'TransactionsController@getProcess');

Route::get('/import', 'ExcelController@getImport');

Route::post('/postImport', 'ExcelController@postImport');

Route::get('/transactions/delete_all', 'ExcelController@deleteAll');

Route::get('/config', 'ParametersController@getParameters');

Route::post ('/config/update', 'ParametersController@postUpdate');
