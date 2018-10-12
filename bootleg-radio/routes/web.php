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


Route::get('bandregister', array('as' => 'bandregister', 'uses' => 'HomeController@bandreg'));

<<<<<<< HEAD
Route::get('bandprofile', array('as' => 'bandprofile', 'uses' => 'HomeController@bandprof'));
=======
Route::resource('bands', 'BandRegController')->middleware('auth');

Route::get('bands.profile', array('as' => 'bands.profile', 'uses' => 'BandRegController@index'))->middleware('auth');
>>>>>>> 862947692afc6d377d5f00d66a1786a0cf970801
