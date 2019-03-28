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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Band', 'BandController@index');
Route::get('Band', 'BandController@show');
Route::post('Band', 'BandController@store');
Route::put('Band', 'BandController@supdate');
Route::delete('Band', 'BandController@destroy');
Route::apiResources([
    'bands' => 'API\BandController'
]);