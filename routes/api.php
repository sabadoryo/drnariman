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

    Route::group([
        'prefix' => 'disease'
    ], function () {
        Route::post('', [\App\Http\Controllers\Admin\DiseaseController::class, 'store']);
        Route::put('{disease}', [\App\Http\Controllers\Admin\DiseaseController::class, 'update']);
        Route::delete('{disease}', [\App\Http\Controllers\Admin\DiseaseController::class, 'destroy']);
        Route::post('{disease}/upload-media', [\App\Http\Controllers\Admin\DiseaseController::class, 'uploadMedia']);
    });
});

Route::group([

], function () {
    Route::group([
        'prefix' => 'service'
    ], function () {
        Route::get('/', [\App\Http\Controllers\ServiceController::class, 'index']);
    });

    Route::group([
        'prefix' => 'disease'
    ], function () {
        Route::get('/', [\App\Http\Controllers\DiseaseController::class, 'index']);
    });
});
