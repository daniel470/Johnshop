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
Route::get('/students', function (){
           return view('users.students');
});

Route::get('/index2', function (){
    return view('index2');
});
Route::get('/addtocart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.AddToCart'
]);
Route::get('/reduce/{id}', [   
    'uses' =>'ProductController@getReduceByOne',
    'as'   => 'product.reduceByOne'
]);
Route::get('/remove/{id}',[
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);
Route::get('/shoppingcart',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingcart'
]);
Route::get('/checkout',[   
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);
Route::post('/checkout', [
    'uses' =>'ProductController@postCheckout',
    'as' => 'checkout'
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
