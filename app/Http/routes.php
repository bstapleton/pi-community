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

// Admin routes
Route::get('admin', 'AdminController@index');
Route::get('admin/articles', 'Admin\ArticleController@index');
Route::get('admin/articles/create', 'Admin\ArticleController@create');
Route::get('admin/articles/edit/{id}', 'Admin\ArticleController@edit');

Route::get('admin/users', 'Admin\UserController@index');
Route::get('admin/users/show/{name}', 'Admin\UserController@show');
Route::get('admin/users/edit/{name}', 'Admin\UserController@edit');
Route::patch('admin/users/update/{name}', [
    'as' => 'admin.user.update',
    'uses' => 'Admin\UserController@update'
]);
Route::delete('admin/users/destroy/{name}', 'Admin\UserController@destroy');

// Page/content routes
Route::get('/', 'ContentController@index');
Route::get('{slug}/reply', 'ContentController@reply');
Route::get('indie-weekend/3', 'IndieWeekendController@index');

// Game routes
Route::get('games', 'GamesController@index');
Route::get('games/create', 'GamesController@create');
Route::get('games/{id}', 'GamesController@show');
Route::post('games', 'GamesController@store');

// Developer routes
Route::get('developer', 'DeveloperController@index');
Route::get('developer/create', 'DeveloperController@create');
Route::get('developer/{id}', 'DeveloperController@show');
Route::post('developer', 'DeveloperController@store');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');