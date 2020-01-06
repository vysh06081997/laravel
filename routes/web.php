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
Route::get('home', function () {
    return view('home');
});

Route::get('skills', function () {
    return view('skills');
});
Route::get('recommendation', function () {
    return view('recommendation');
});
Route::get('latestwork', function () {
    return view('latestwork');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('hireme', function () {
    return view('hireme');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('login', function () {
    return view('login');
});
Route::get('signup', function () {
    return view('signup');
});
Route::resource('edus','eduController');
Route::resource('exps','ExpController');
Route::resource('works','WorkController');
Route::resource('hiremes','HiremeController');
Route::resource('projecttodiscusses','ProjecttodiscussController');
Route::resource('logins','LoginController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('auth/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
