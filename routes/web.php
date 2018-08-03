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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('pages.about');
});

*/


/*Route::get('/', 'PagesController@index');*/
Route::get('/','PagesController@index');
 
//Search Route User
Route::get('/user/search', 'NutzersController@index');
Route::get('/user/search/action', 'NutzersController@action')->name('user_live_search.action');
//Search Route PC
Route::get('/pc/search', 'ComputersController@index');
Route::get('/pc/search/action', 'ComputersController@action')->name('pc_live_search.action');


Route::resource('pc', 'ComputersController');
Route::resource('room', 'RoomsController');
Route::resource('user', 'NutzersController');
Route::resource('switch', 'SwitchsController');
Route::resource('tel', 'TelefonsController');
Auth::routes();


