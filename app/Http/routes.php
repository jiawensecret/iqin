<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/t','TestController@t');
Route::get('/s','TestController@s');



Route::get('/about','AboutController@index');
Route::get('/','IndexController@index');
Route::get('/categories/{id}','CategoryController@index')->where('id','[0-9]+');
Route::get('/hot','HotController@index');
Route::get('/note','NoteController@index');
Route::get('/owner','OwnerController@index');
Route::get('/resource','ResourceController@index');
Route::get('/article-list','ArticleListController@index');
Route::get('/article/{id}','ArticleController@index');
Route::get('/search','SearchController@index');
Route::get('/create','CreateController@index');
Route::get('/create/write','CreateController@write');
Route::get('/emessage/{id}','EmessageController@index')->where('id','[0-9]+');


//登录注册
Route::get('/register','UserController@register');
Route::post('/register','UserController@postRegister');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');
