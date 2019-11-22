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

Route::group(['prefix' => 'auth'], function () {
    Route::get('/', 'AuthController@me');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('me', 'AuthController@me');

    Route::group(['prefix' => 'patient'], function () {
        Route::get('/', 'PatientAuthController@me');
        Route::post('login', 'PatientAuthController@login');
        Route::post('logout', 'PatientAuthController@logout');
        Route::post('refresh', 'PatientAuthController@refresh');
    });
});

// 病患取得膝關節紀錄
Route::group(['prefix' => 'patient', 'middleware' => ['auth:patient']], function () {
    Route::get('knee-joint', 'PatientController@getKneeJoints');
});

// 醫師&護理師取得膝關節紀錄
Route::group(['middleware' => ['auth:api']], function () {
    Route::apiResource('knee-joint', 'KneeJointController');
    Route::apiResource('knee-evaluation', 'KneeEvaluationController');
});
