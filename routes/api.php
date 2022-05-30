<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;


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

// Create New Order From SPA
Route::post('/spa/order', [OrderController::class, 'create']);

Route::prefix('package')->group(function (){
    Route::get('/','App\Http\Controllers\Api\DashApiController@indexPackage');
    Route::get('/{id}','App\Http\Controllers\Api\DashApiController@showPackage');
});

Route::prefix('service')->group(function (){
    Route::get('/','App\Http\Controllers\Api\DashApiController@indexService');
    Route::get('/{id}','App\Http\Controllers\Api\DashApiController@showService');
});

