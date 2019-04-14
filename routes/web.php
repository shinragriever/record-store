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
    return view('index');
});

Route::get('/shop', function(){
	return view('product');
});

Auth::routes();

 Route::get('/admin','AdminController@index')->name('admin');
 
Route::group(['middleware'=>'auth', 'prefix' => 'admin'],function(){
   Route::resource('users','AdminUserController');
   Route::resource('categories','CategoryController');
   Route::resource('products','ProductController');

    
});


