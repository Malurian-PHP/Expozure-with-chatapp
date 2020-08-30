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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@front');
Route::resource('/view', 'DashboardController');
Route::get('/edit-profile', 'UserController@index')->name('update');
Route::get('profile', 'UserController@show')->name('show');
Route::post('/search', 'SearchController@store');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('update', 'UserController@update');
Route::post('skills', 'SkillController@store');


Route::get('dash', 'DashboardController@index');
Route::get('resume', 'DashboardController@resume');
Route::get('view', 'DashboardController@view');
Route::get('/chat-view', 'DashboardController@chatView');

Route::get('sign', 'HomeController@sign');

Route::post('post', 'PostController@store');

Route::get('/contacts', 'ChatController@index');
Route::get('/conversation/{id}', 'ChatController@show');
Route::post('/conversation/send', 'ChatController@create');
