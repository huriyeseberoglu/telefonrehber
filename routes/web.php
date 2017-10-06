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

Route::get('/listele', array('as'=>'listele','uses'=>'ListeleController@getlistele'));

Route::get('/yenikayit', 'KayitController@kayit')
->name('rehber.kayit');

Route::post('/kaydet', array('as'=>'kaydet','uses'=>'KayitController@postKaydet'));

Route::post('/sonuc', array('as'=>'sonuc','uses'=>'ListeleController@postSonuc'));