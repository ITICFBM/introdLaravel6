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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

/* Route::get('articulos', function(){
    return "esta es una ruta desde el archivo de api";
}); */

//Route::get('user','ApiuserController@index');
Route::resource('categories','Api\ApicategoriesController',['except' => ['create', 'edit']]);