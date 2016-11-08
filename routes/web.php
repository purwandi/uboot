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

Route::get('/', 'HomeController@index');

Route::get('auth/login', 'AuthController@login');
Route::get('auth/logout', 'AuthController@logout');
Route::get('auth/user', 'AuthController@user');

#Route::group(['prefix' => 'api'], function () {
Route::get('projects', 'ProjectController@index');
Route::get('projects/create', 'ProjectController@create');
Route::post('projects', 'ProjectController@store');

Route::get('projects/{id}/issues', 'IssueController@index');

Route::get('boards/{id}', 'BoardController@show');

Route::group(['prefix' => 'hooks'], function () {
    Route::post('slack', 'HookSlackController@store');
});
#});
Route::group(['prefix' => 'api'], function () {
    Route::get('slack', 'Api\SlackController@index');
    Route::get('gitlab', 'Api\GitLabController@index');
    Route::get('projects', 'Api\ProjectController@index');
    Route::post('projects', 'Api\ProjectController@store');
});
