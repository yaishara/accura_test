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

Route::get('/create', 'MemberDetailsController@create')->name('member.create');
Route::get('/', 'MemberDetailsController@index')->name('member.index');
Route::post('/store', 'MemberDetailsController@store')->name('member.store');
Route::get('/edit/{id}', 'MemberDetailsController@edit')->name('member.edit');
Route::post('/update/{id}', 'MemberDetailsController@update')->name('member.update');
Route::get('/destroy/{id}', 'MemberDetailsController@destroy')->name('member.destroy');

