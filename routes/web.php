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
Route::get('/index1', [

    'uses' => 'ProductController@getIndex',
    'as' => 'product.index1'     /// I changed product to products
]);
//Route::group(['prefix' => 'user'], function()) {

    //Route::group(['middleware' => 'guest], function())
//{

    Route::get('/Signup', [     
        'uses' => 'UserController@getSignup',
        'as'=> 'users.Signup',
        'middleware' => 'guest'
    ]);
    Route::post('/Signup',[
    'uses' => 'UserController@postSignup',
    'as'   => 'users.Signup',
    'middleware' => 'guest'
    ]);  
    Route::get('/users/Signin', [     
    'uses' => 'UserController@getSignin',
    'as'=> 'users.Signin',
    'middleware' => 'guest'
    ]);
    Route::post('/users/Signin',[
    'uses' => 'UserController@postSignin',
    'as'   => 'user.Signin',
    'middleware' => 'guest'
    ]); 
    
//};

//Route::group(['middleware' => 'auth'], function()
//{

    Route::get('/users/profile',[
        'uses' => 'UserController@getProfile',
        'as'  =>   'users.profile',
        'middleware' => 'auth'
    ]);
    Route::get('/users/logout', [
        'uses' => 'UserController@getLogout',
        'as'   => 'users.logout',
        'middleware' => 'auth'
    ]);
    

//};
//}); 
