<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomePageController@home');
Route::get('/contact', 'HomePageController@contact');
Route::post('/contact_us', 'HomePageController@contact_us');
Route::get('/blog', 'HomePageController@blog');
Route::get('/portfolio-details', 'HomePageController@portfolio_details');
Route::get('/faq', 'HomePageController@faq');