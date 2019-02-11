<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => ['auth:api']], function () {

    Route::post('/tasks', 'TaskController@create');
    Route::delete('/tasks/{id}','TaskController@delete');
    Route::put('/tasks/{id}', 'TaskController@setTaskDone');
    Route::get('user/tasks', 'TaskController@show');
    Route::get('/tasks', 'TaskController@showAllTasks');


});



