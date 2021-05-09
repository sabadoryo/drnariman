<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'prefix' => 'admin'
], function () {
    Route::resource('service', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('disease', \App\Http\Controllers\Admin\DiseaseController::class);
});

Route::group([

], function () {
    Route::group([
        'prefix' => 'service'
    ], function () {
        Route::get('/', [\App\Http\Controllers\ServiceController::class, 'index']);
    });
});
