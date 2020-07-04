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

Route::get('/','HomeController@index');
Route::get('/home','HomeController@index')->name('home');
Route::get('/login', 'LoginController@index') -> name('login');
Route::post('/login', 'LoginController@verify');
Route::get('/details/{id}','HomeController@details')->name('details');

Route::get('/v_details', function () {
    return view('video_details');
});

Route::group(['middleware'=>['sessioncheck']], function(){

Route::resource('create', 'CreatePostController');
Route::resource('allpost', 'AllPostController');
Route::get('/allpost/unpublish/{id}', 'AllPostController@unpublish')->name('unpublish');
Route::get('/allpost/publish/{id}', 'AllPostController@publish')->name('publish');
Route::get('/logout','LogoutController@index');

});


