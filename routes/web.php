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

Route::get('/', function()
{
    return view('login');
});

Route::get('login', [ 'as' => 'login', function()
{
    return view('login');
}]);

//AUTH
Route::post('/auth/login', 'Auth\LoginController@login');

Route::get('/auth/logout', 'Auth\LoginController@logout');

//USERS
Route::get('/users/index', 'Users\ListController@index')->middleware('auth');

Route::get('/users/add', 'Users\AddUserController@index')->middleware('auth');
Route::post('/users/add', 'Users\AddUserController@add')->middleware('auth');

Route::get('/users/details/{var1}', 'Users\DetailsController@index')->middleware('auth');

Route::get('/users/edit/{var1}', 'Users\EditUserController@index')->middleware('auth');
Route::post('/users/edit/{var1}', 'Users\EditUserController@edit')->middleware('auth');

Route::get('/users/remove/{var1}', 'Users\RemoveUserController@remove')->middleware('auth');


//ADDRESS
Route::get('/address/add/{var1}', 'UserAddress\AddAddressController@index')->middleware('auth');
Route::post('/address/add/{var1}', 'UserAddress\AddAddressController@add')->middleware('auth');

Route::get('/address/remove/{var1}/{var2}', 'UserAddress\RemoveAddressController@remove')->middleware('auth');

Route::get('/address/edit/{var1}/{var2}', 'UserAddress\EditAddressController@index')->middleware('auth');
Route::post('/address/edit/{var1}/{var2}', 'UserAddress\EditAddressController@edit')->middleware('auth');