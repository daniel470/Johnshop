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
Route::get('/addtocart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.AddToCart'
]);
Route::get('/index1', [

    'uses' => 'ProductController@getIndex',
    'as' => 'product.index1'     /// I changed product to products
]);
Route::group(['prefix' => 'users'], function(){

Route::group(['middleware' => 'guest'], function()
{

    Route::get('/Signup', [     
        'uses' => 'UserController@getSignup',
        'as'=> 'users.Signup',
        
    ]);
    Route::post('/Signup',[
    'uses' => 'UserController@postSignup',
    'as'   => 'users.Signup',
   
    ]);  
    Route::get('/Signin', [     
    'uses' => 'UserController@getSignin',
    'as'=> 'users.Signin',
    
    ]);
    Route::post('/Signin',[
    'uses' => 'UserController@postSignin',
    'as'   => 'user.Signin',
  
    ]); 
    
});

//Route::group(['middleware' => 'auth'], function()
//{

    Route::get('/profile',[
        'uses' => 'UserController@getProfile',
        'as'  =>   'users.profile',
    ]);
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as'   => 'users.logout',
    ]);
    

//});
}); 
