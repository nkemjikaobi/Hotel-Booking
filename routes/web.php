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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', 'ContactController@store');

Route::get('/test', function () {
    return view('pages.test');
});

Route::post('/subscribers/add', 'SubscribersController@storeSubscribers');
// Route::post('/', 'SubscribersController@subscribers');
// Route::post('/', 'SubscribersController@subscribers');
// Route::post('/', 'SubscribersController@subscribers');
// Route::post('/', 'SubscribersController@subscribers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
