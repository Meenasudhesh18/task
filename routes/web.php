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


//Admin uploads the excel
Route::resource('/book-upload', 'AdminController');
Route::get('/user-list', 'userListController@displayUsers')->name('userList');
Route::get('/book-list', 'userListController@displayBooks')->name('bookList');

