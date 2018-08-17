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
use App\Http\Api\V1\TestController as Test;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/key',Test::class.'@index');
Route::group(['prefix'=>'v1'],function (){
    Route::get('user',function (){
        return 'user list';
    });
});
