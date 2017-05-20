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

Route::resource('credits', 'CreditController');
Route::get('contracts', 'ContractController@index');
Route::get('contracts/review/{id}', 'ContractController@review')->name('review');
Route::get('contracts/approbe/{id}', 'ContractController@approbe')->name('approbe');
//Route::post('/credits', 'CreditController@create')->name('credits.create');

//Route::get('credits', 'CreditsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
