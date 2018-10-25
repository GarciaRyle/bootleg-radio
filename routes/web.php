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
Route::resource('bands', 'BandRegController')->middleware('auth');
Route::get('bands.profile', array('as' => 'bands.profile', 'uses' => 'BandRegController@index'))->middleware('auth');
Route::get('bands.create', array('as' => 'bands.create', 'uses' => 'BandRegController@create'))->middleware('auth');
Route::get('bands/edit/{id}', 'BandRegController@edit')->middleware('auth');
Route::post('/bands/update/{id}', 'BandRegController@update');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::get('/viewBanduser', array('as' => 'viewBanduser', 'uses' => 'BandRegController@index2'))->middleware('auth');
Route::get('/editUsers', 'HomeController@lovelyeditusers')->name('edituserlove');

Route::get('/home', 'HomeController@index')->name('home');
