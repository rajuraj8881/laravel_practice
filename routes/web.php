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

use Illuminate\Support\Facades\Route;

Route::get('/calc/{o}={a}&{b}', 'CalcController@calculator');

Route::get('/mt/{a}', 'CalcController@multiplicationTable');

Route::get('/persons', 'PersonController@getPersons');

Route::get('/transfer/{amount}-{n1}-{n2}', 'PersonController@transferBalance');

Route::get('/add/{name}={amount}', 'PersonController@addBalance');
