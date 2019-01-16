<?php

use Illuminate\Http\Request;
Use App\Models\Analista;

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

Route::get('analistas', 'AnalistaController@index');
Route::get('analistas/{id}', 'AnalistaController@show');
Route::post('analistas', 'AnalistaController@store');
Route::put('analistas/{id}', 'AnalistaController@update');
Route::delete('analistas/{id}', 'AnalistaController@delete');
