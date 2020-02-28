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

Route::get('/', 'Home@index');
Route::post('/login','UserControl@login');
Route::get('/logout','UserControl@logout')->name('logout');

Route::get('/phone',function(){
    return view('product_detail');
});

Route::get('/computer',function(){
     return view('computer');
});

Route::get('/signup','UserControl@signup')->name('signup');
Route::post('/signup_account','UserControl@register');
Route::get('/show/{id}','Home@show');
Route::get('/iphone','Home@iphone');
Route::get('/samsung','Home@samsung');
Route::get('/huawie','Home@huawie');
Route::get('/oppo','Home@oppo');
Route::get('/mobile','Home@mobile');


Route::group(['middleware'=>'UserMiddleware'],function (){
    Route::get('/Admin','UserControl@admin')->name('admin');
    Route::get('/Post','UserControl@post')->name('post');
    Route::post('/upload','UserControl@upload');
    Route::post('/edit','UserControl@edit');
    Route::get('/approve','UserControl@approve')->name('approve');
    Route::post('/approved/{id}','UserControl@approved')->name('approved');
    Route::Post('/removed/{id}','UserControl@removed')->name('remove');
});