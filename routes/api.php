<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//POST ROUTES
Route::get('/posts',             'PostController@index');
Route::get('/post/{id}',         'PostController@show');
Route::delete('/posts/{id}/delete', 'PostController@delete');
Route::get('/posts/{id}/edit',     'PostController@edit');

//CATEGORIES ROUTES
Route::get('/categories' , 'CategoryController@index');
