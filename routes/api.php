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

// Route::group([
//     'prefix' => 'v1'
// ], function($router){
    Route::any('/fetch-post', 'BlogController@fetch_post');
    Route::any('/add-post', 'BlogController@add_post');
    Route::any('/update-post', 'BlogController@update_post');
    Route::any('/delete-post', 'BlogController@delete_post');
// });