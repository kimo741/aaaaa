<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*** Client ***/

//    Route::post('/login','App\Http\Controllers\Client\AuthController@dologin')->name('do.login');
Route::prefix('client')->group(function () {
    Route::any('/logout', 'App\Http\Controllers\Client\AuthController@destroy');

    /* Client Auth */
    Route::get('/login','App\Http\Controllers\Client\AuthController@login')->name('get.login');
    Route::get('/register','App\Http\Controllers\Client\AuthController@register')->name('get.register');

    Route::post('/login','App\Http\Controllers\Client\AuthController@dologin')->name('do.login');
    Route::post('/register','App\Http\Controllers\Client\AuthController@doRegister')->name('do.register');

    /*** E-mail Verification ***/
    Route::get('/notice','App\Http\Controllers\Client\AuthController@getNotice')->name('verification.notice'); // get View
    Route::get('/email/verify/{id}/{hash}','App\Http\Controllers\Client\AuthController@getverify')  // Send email
            ->middleware(['auth:client', 'signed'])
            ->name('verification.verify');

    // Get Verified
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return redirect()->back()->with('success', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    /* Client Routes For Authenticated */
    Route::middleware(['auth:client'])->group(function (){
        Route::get('/t', function (){return "<h1>Client Home</h1><a href='reset'>Reset Password</a>";})->name('client.home');

        Route::get('/reset','App\Http\Controllers\Client\AuthController@reset')->name('client.get.reset');
        Route::post('/reset','App\Http\Controllers\Client\AuthController@doReset')->name('client.do.reset');

    });
});


Route::prefix('dashboard')->group(function (){

    /**  Package  **/
    Route::prefix('package')->group(function (){
        Route::get('/','App\Http\Controllers\Admin\PackageController@index')->name('package.get.all');
        Route::get('/add','App\Http\Controllers\Admin\PackageController@addForm')->name('package.get.add.form');
        Route::get('/edit/{id}','App\Http\Controllers\Admin\PackageController@editForm')->name('package.get.edit.form');
        Route::post('/add','App\Http\Controllers\Admin\PackageController@update')->name('package.add');
        Route::post('/edit','App\Http\Controllers\Admin\PackageController@update')->name('package.update');
        Route::get('/delete/{id}','App\Http\Controllers\Admin\PackageController@delete')->name('package.delete');
    });

    /**  Item  **/
    Route::prefix('items')->group(function (){
        Route::get('/','App\Http\Controllers\Admin\ItemController@index')->name('item.get.all');
        Route::get('/add','App\Http\Controllers\Admin\ItemController@addForm')->name('item.get.add.form');
        Route::get('/edit/{id}','App\Http\Controllers\Admin\ItemController@editForm')->name('item.get.edit.form');
        Route::post('/add','App\Http\Controllers\Admin\ItemController@update')->name('item.add');
        Route::post('/edit','App\Http\Controllers\Admin\ItemController@update')->name('item.update');
        Route::get('/delete/{id}','App\Http\Controllers\Admin\ItemController@delete')->name('item.delete');
    });

    /**  Services  **/
    Route::prefix('service')->group(function (){
        Route::get('/','App\Http\Controllers\Admin\ServiceController@index')->name('service.get.all');
        Route::get('/add','App\Http\Controllers\Admin\ServiceController@addForm')->name('service.get.add.form');
        Route::get('/edit/{id}','App\Http\Controllers\Admin\ServiceController@editForm')->name('service.get.edit.form');

        Route::post('/add','App\Http\Controllers\Admin\ServiceController@update')->name('service.add');
        Route::post('/edit','App\Http\Controllers\Admin\ServiceController@update')->name('service.update');
        Route::get('/delete/{id}','App\Http\Controllers\Admin\ServiceController@delete')->name('service.delete');
    });

    /**  clients  **/
    Route::prefix('client')->group(function (){
        Route::get('/','App\Http\Controllers\Admin\ClientController@index')->name('client.get.all');
        Route::get('/add','App\Http\Controllers\Admin\ClientController@addForm')->name('client.get.add.form');
        Route::get('/add/package','App\Http\Controllers\Admin\ClientController@addFormPackage')->name('client.get.add.package.form');
        Route::get('/add/task','App\Http\Controllers\Admin\ClientController@addFormTask')->name('client.get.add.task.form');
        Route::get('/edit/{id}','App\Http\Controllers\Admin\ClientController@editForm')->name('client.get.edit.form');

        Route::post('/add','App\Http\Controllers\Admin\ClientController@update')->name('client.add');
        Route::post('/edit','App\Http\Controllers\Admin\ClientController@update')->name('client.update');
        Route::get('/delete/{id}','App\Http\Controllers\Admin\ClientController@delete')->name('client.delete');
    });

});

