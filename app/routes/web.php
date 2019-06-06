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


Route::get('/', 'FileController@index')->name('files.index');
 
Route::post('/files', 'FileController@store')->name('files.store');
 
Route::delete('/files/{file}', 'FileController@destroy')->name('files.destroy');
 
Route::get('/files/{file}/download', 'FileController@download')->name('files.download');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::resource('eventos','EventController');
    
});

Route::get('envivo','TransmissionController@envivo');
Route::post('envivo','TransmissionController@store');
Route::delete('envivo/detener','TransmissionController@detener');