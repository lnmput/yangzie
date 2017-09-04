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


Route::group(['prefix' => 'tools'], function () {
    Route::get('/fetchimages', 'FetchImages@index')->name('tool.fetchimages');
    Route::post('/fetch', 'FetchImages@fetch')->name('tool.fetch');
});

Route::group(['prefix' => 'dialog'], function () {
    Route::get('favarateSite', 'Dialogs@favarateSite')->name('dialog.favarateSite');
    Route::get('donate', 'Dialogs@donate')->name('dialog.donate');
});