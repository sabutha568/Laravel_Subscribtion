<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('subscriber::subscriber');

});

Route::get('subscriber', 'SubscribersController@create');
Route::post('subscriber', 'SubscribersController@store');

Route::group(['namespace' => 'snw\Subscriber\Http\Controllers'], function () {
    $value = config('subscriber.snw_test_mode');
    
    if ($value) {
        Route::get('contact', 'SubscribersController@index')->name('contact');
        Route::post('/', 'SubscribersController@send');
        Route::get('/', function () {
            return view('subscriber::subscriber');
    });
    
    Route::any('{query}', function () {
        return view('subscriber::subscriber', compact('value', 'dt'));
    })->where('query', '.*');
    }
});