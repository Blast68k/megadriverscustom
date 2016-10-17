<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
    'login' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

//get DB entries
Route::get('/md-soft/', 'mdSoft@getDBentries');

//get MD-soft details
//Route::get('/md-soft-details/{title_en}', 'mdSoft@getDetails');

Route::get('/md-soft-details/{title_en?}', 'mdSoft@show');

Route::get('devlog', function()
{
    return view('devlog');
});

Route::get('login', function()
{
    return view('login');
});