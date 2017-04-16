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
//
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/','blogController@index');
Route::get('/show/{slug}','blogController@show');

// Resource
Route::Resource('/post','postController');

// social login

// Route::get('/redirect','SocialAuthController@redirectToProvider');
// Route::get('/callback','SocialAuthController@handleProviderCallback');

Route::get('login/facebook', 'SocialAuthController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'SocialAuthController@handleProviderCallback');
