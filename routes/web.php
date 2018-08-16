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

// Admin Routes
Route::get('/admin','HomeController@admin')->middleware('is_admin')->name('admin');
Route::get('/registerAdmin','AdminController@registerAdmin')->middleware('is_admin')->name('registerAdmin');
Route::post('/registerAdmin','AdminController@storeAdmin');
Route::get('/newQuiz','AdminController@registerQuiz')->middleware('is_admin')->name('newQuiz');
Route::post('/newQuiz','AdminController@storeQuiz');
Route::get('/setQuestion','AdminController@setQuestion')->middleware('is_admin')->name('setQuestion');
Route::post('/setQuestion','AdminController@storeQuestion');
Route::get('/select-ajax', 'AdminController@selectAjax');
Route::post('/uploadAiken','AdminController@storeAiken');

// Main Routes
Route::get('/index',);