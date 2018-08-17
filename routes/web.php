<?php

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



Route::get('user/{id}',function($id){
	return 'id = '.$id;
});

Route::get('class/{id?}',function($id = 0){
	return 'id = '.$id;
});

Route::get('user/{id}/{name}',function($id,$name){
	return 'id = '.$id . ' and name = '.$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

Route::get('users/add',['as'=>'add','uses'=>function(){
    return 'hello new name';
}]);

Route::get('home/walk','HomeController@walk');
Route::get('home/add','HomeController@getCounter');


Route::resource('home','HomeController');



Route::group(['prefix'=>'article'],function (){
    Route::get('description',function (){
        return 'article/description';
    });

    Route::get('price',function (){
        return 'article/price';
    });
});

Route::get('home/{name}{id ?}','HomeController@index');