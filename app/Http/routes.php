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



Route::get('/', 'PagesController@getIndex');

Route::get('pvc', 'PagesController@getPvc');

Route::get('al', 'PagesController@getAl');

Route::get('roletni', 'PagesController@getRol');

Route::get('komarnici', 'PagesController@getKom');

Route::get('promo', 'PagesController@getPromo');

Route::get('/contact', ['as' => 'pages.contact', 'uses' => 'PagesController@getContact']);
Route::post('contact', 'PagesController@postContact');