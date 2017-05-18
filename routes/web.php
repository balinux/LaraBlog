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
Route::Resource('/post','postController', ['only' => [
    'store', 'show', 'edit','update','destroy','create'
]]);

$router->group(['middleware' =>['roles']], function() {

    Route::get('list/user',[
      'uses'      =>  'postController@listuser',
      'as'        =>  'list.user',
      'middleware'=>  'roles',
      'roles'     =>  ['Admin']
    ]);

    Route::get('/post/create',[
      'uses'      =>  'postController@create',
      'as'        =>  'create of post',
      'roles'     =>  ['Admin','Author']
    ]);

    // JOB membuat list post author
    Route::get('/post',[
      'uses'      =>  'postController@index',
      'as'        =>  'post of index',
      'roles'     =>  ['Admin','Author']
    ]);


});

// Route::get('/post/create',[
//   'uses'      =>  'postController@create',
//   'as'        =>  'resource',
//   'middleware'=>  'roles',
//   'roles'     =>  ['Admin','Author']
// ]);

// Route::get('list/user',[
//   'uses'      =>  'postController@listuser',
//   'as'        =>  'list.user',
//   'middleware'=>  'roles',
//   'roles'     =>  ['Admin','Author']
//   ]);

Route::post('list/user','postController@adminAssignRole');
Route::delete('list/user/{id}','postController@deluser');

// social login
// Route::get('/redirect','SocialAuthController@redirectToProvider');
// Route::get('/callback','SocialAuthController@handleProviderCallback');

Route::get('login/facebook', 'SocialAuthController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'SocialAuthController@handleProviderCallback');
