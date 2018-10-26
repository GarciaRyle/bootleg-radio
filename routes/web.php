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

Route::get('/viewBanduser', 'HomeController@view')->name('viewBanduser');

Route:: get('/show/{id}', 'UserController@show'); 
Route:: post('/update/{id}', 'UserController@update'); 


Route::get('/viewBanduser', array('as' => 'viewBanduser', 'uses' => 'BandRegController@index2'))->middleware('auth');
Route::get('/editUsers', 'HomeController@lovelyeditusers')->name('edituserlove');
<<<<<<< HEAD


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/featuredartist', 'HomeController@view2')->name('featuredartist');
Route::get('/featuredartist', array('as' => 'featuredartist', 'uses' => 'BandRegController@index3'))->middleware('auth');


=======


Route::get('/AddBandMember', 'BandRegController@addBandMem')->name('AddBandMember');


?>
>>>>>>> 8a8cd6f7439e9b0d3cd54ed885133a842b0f617a
