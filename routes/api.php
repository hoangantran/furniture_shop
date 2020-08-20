<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('','Home@listApi');

Route::get('category/read/all','ApiController@readAll');

Route::get('category/read/{id}','ApiController@read');

Route::post('category/delete','ApiController@delete');

Route::post('category/create','ApiController@create');

Route::post('category/update','ApiController@update');

/*---------------------------------------------*/

Route::get('product/read/all','ApiProductController@readAll');

Route::get('product/read/{id}','ApiProductController@read');

Route::post('product/delete','ApiProductController@delete');

/*---------------------------------------------*/

Route::get('user/read/all','ApiUserController@readAll');

Route::get('user/read/{id}','ApiUserController@read');

Route::post('user/delete','ApiUserController@delete');