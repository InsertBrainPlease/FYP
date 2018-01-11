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
    return view('pages.welcome');
});

Auth::routes();

//user
Route::get('home', 'HomeController@index')->name('home');
Route::get('vote', 'HomeController@vote')->name('vote');
Route::post('store/{id}', 'HomeController@store')->name('store');
Route::get('result', 'HomeController@result')->name('result');
Route::get('about', 'HomeController@about')->name('about');
Route::get('success', 'HomeController@success')->name('success');
Route::get('users/logout', 'Auth\LoginController@userLogout')->name('users.logout');

//candidate
Route::resource('candidate', 'CandidateController');



//election
Route::resource('election', 'ElectionController');

//Result
// Route::resource('result', 'AdminResultController');




//admin
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
Route::get('admin', 'AdminController@index')->name('admin.home');
Route::get('adminresult', 'AdminController@result')->name('admin.result');
Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('admin/store', 'AdminController@store')->name('admin.store');