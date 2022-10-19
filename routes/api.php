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
Route::post('/data','studentcontroller@data');
Route::get('/datas','studentcontroller@show');
Route::get('/student/{id}','studentcontroller@showbyid');
Route::put('/studentupd/{id}','studentcontroller@updatebyid');
Route::delete('/studentdel/{id}','studentcontroller@del');