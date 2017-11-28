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

Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/register', 'PagesController@getRegister');

Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');

Route::get('/docs', 'PagesController@getDocs');

Route::post('/contact/submit', 'MessagesController@submit');

Route::post('/user/login', 'Auth\LoginController@AuthenticatesUsers');

Route::get('/welcome', function(){
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
