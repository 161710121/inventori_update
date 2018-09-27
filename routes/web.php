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

Route::get('/home', function () {
    return view('layouts.admin');
});  

Route::group(['prefix' => 'admin','middleware'=>['auth', 'role:admin']],

function(){

    Route::get('/home', 'HomeController@index')->name('home');  

    Route::resource('kategori', 'KategoriController');
    Route::resource('kampus', 'KampusController');
    Route::resource('barang', 'BarangController');
    
    Route::resource('ruangjns', 'RuanganjnsController');
    Route::get('ruangjns/{ruangjn}/edit', 'RuanganjnsController@edit');
    
    Route::resource('ruangan', 'RuanganController');
    Route::get('ruangan/{id}/edit', 'RuanganController@edit');
    
    Route::resource('expedisi', 'ExpedisiController');
    Route::get('expedisi/{id}/edit', 'ExpedisiController@edit');
    
    Route::resource('tandaterima', 'TandaterimaController');
    Route::get('tandaterima/{id}/edit', 'TandaterimaController@edit');
    
    Route::resource('barangrusak', 'BarangrusakController');
    Route::get('barangrusak/{id}/edit', 'BarangrusakController@edit');
    
    Route::resource('user', 'UserController');

});
