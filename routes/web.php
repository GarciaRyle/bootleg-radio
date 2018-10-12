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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bandprofile', array('as' => 'bands.profile', 'uses' => 'HomeController@bandprof'))->middleware('auth');

Route::get('bandregister', array('as' => 'bandregister', 'uses' => 'HomeController@bandreg'));

Route::resource('bands', 'BandRegController')->middleware('auth');

Route::get('bands.profile', array('as' => 'bands.profile', 'uses' => 'BandRegController@index'))->middleware('auth');

