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

Route::prefix('v1')->group(function() {
    Route::get('/', function () { return ['name' => 'api.simplegame', 'rev' => 'v1.0.0'];});
    Route::post('/users/login', 'Api\AuthController@login');

    Route::middleware('token')->group(function() {
        Route::post('/users/list', 'Api\UserController@login');

        Route::post('/games/list', 'Api\GameController@login');

        Route::post('/games/new', 'Api\GameController@login');

        Route::post('/games/play', 'Api\GameController@login');

        Route::post('/games/state', 'Api\GameController@login');
    });
});