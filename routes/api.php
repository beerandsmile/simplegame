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

Route::prefix('/v1', function() {
    Route::post('/', function () { return ['name' => 'api.simplegame', 'rev' => 'v1.0.0'];});
    Route::post('/users/login', 'ApiAuthController@login');

    Route::middleware('token')->group(function() {
        Route::post('/users/list');

        Route::post('/games/list');

        Route::post('/games/new');

        Route::post('/games/play');

        Route::post('/games/state');
    });
});