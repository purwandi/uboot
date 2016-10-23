<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Route::get('auth/login', 'AuthController@login');
Route::get('auth/user', 'AuthController@user');

#Route::group(['prefix' => 'api'], function () {
Route::get('projects', 'ProjectController@index');
Route::get('projects/create', 'ProjectController@create');
Route::post('projects', 'ProjectController@store');

Route::get('projects/{id}/issues', 'IssueController@index');

Route::get('boards', 'BoardController@index');

Route::group(['prefix' => 'hooks'], function () {
    Route::get('slack', 'HookSlackController@store');
});
#});
