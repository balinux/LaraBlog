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
Route::Resource('/post',[
  'uses'      =>'postController',
  'middleware'=>'roles',
  'roles'     =>['Admin','Author']
]);
Route::get('list/user',[
  'uses'      =>  'postController@listuser',
  'as'        =>  'list.user',
  'middleware'=>  'roles',
  'roles'     =>  ['Admin','Author']
  ]);

Route::post('list/user','postController@adminAssignRole');

// social login
// Route::get('/redirect','SocialAuthController@redirectToProvider');
// Route::get('/callback','SocialAuthController@handleProviderCallback');

Route::get('login/facebook', 'SocialAuthController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'SocialAuthController@handleProviderCallback');
