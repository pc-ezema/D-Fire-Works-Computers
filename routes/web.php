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
<<<<<<< HEAD
Route::get('/portfolio-details', 'HomePageController@portfolio_details');
Route::get('/faq', 'HomePageController@faq');
=======
Route::get('/service-page-gadgets', 'HomePageController@service_page_gadgets');
Route::get('/service-page-ITsolutions', 'HomePageController@service_page_ITsolutions');
Route::get('/service-page-others', 'HomePageController@service_page_others');
Route::get('/service-page-repairs', 'HomePageController@service_page_repairs');
Route::get('/service-page-software', 'HomePageController@service_page_software');
>>>>>>> bd0bd27 (new-files)
