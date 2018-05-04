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
Route::get('phpinfo','InfoController@index');
/*Route::group(['prefix' => 'index'], function () {
    Route::get('line', 'IndexController@getLines');
    Route::get('club', 'IndexController@getClubs');
    Route::get('thread', 'IndexController@getThreads');
    Route::get('foreign', 'IndexController@getForeign');
    Route::get('province', 'IndexController@getProvince');
});*/
