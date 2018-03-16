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


Route::get('/',[
    'uses' => 'maincontroller@index',
    'as' => 'main'
]);
Route::POST('/Signin',[
    'uses' => 'maincontroller@Signin',
    'as' => 'Signin',
]);

Route::POST('/Signup',[
    'uses' => 'staffcontroller@Signup',
    'as' => 'Signup',
    'middleware' => 'auth'
]);
Route::POST('/Edit Staff Members  Detail',[
    'uses' => 'staffcontroller@editstaff',
    'as' => 'editstaff',
    'middleware' => 'auth'
]);

Route::POST('/Edit Teachers Detail',[
    'uses' => 'staffcontroller@edittea',
    'as' => 'edittea',
    'middleware' => 'auth'
]);

Route::POST('/Edited Teachers Detail',[
    'uses' => 'staffcontroller@teaedit',
    'as' => 'teaedit',
]);
Route::POST('/Edited Staff Detail',[
    'uses' => 'staffcontroller@staedit',
    'as' => 'staedit',
    'middleware' => 'auth'
]);
Route::POST('/Reset Password',[
    'uses' => 'staffcontroller@reset',
    'as' => 'reset',
    'middleware' => 'auth'
]);



Route::get('/getLogout',[
    'uses' => 'staffcontroller@getLogout',
    'as' => 'getLogout',
]);


Route::get('/see staff members',[
    'uses' => 'staffcontroller@seesta',
    'as' => 'seesta',
]);

Route::get('/see Teacher members',[
    'uses' => 'staffcontroller@seetea',
    'as' => 'seetea',
]);

Route::get('/Add Members',[
    'uses' => 'staffcontroller@getadd',
    'as' => 'getadd',
]);
Route::get('/staff',[
    'uses' => 'staffcontroller@sta',
    'as' => 'sta',
]);
Route::get('/teacher',[
    'uses' => 'staffcontroller@tea',
    'as' => 'tea',
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
