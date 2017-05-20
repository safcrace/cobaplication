<?php

use Illuminate\Http\Request;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/register', 'RegisterApiController@register');
Route::get('/credits', 'CreditApiController@index');

/*
Route::group(['prefix' => 'topics'], function () {
    Route::get('/', 'TopicController@index');
    Route::get('/{topic}', 'TopicController@show');
    Route::post('/', 'TopicController@store')->middleware('auth:api');
    Route::patch('/{topic}', 'TopicController@update')->middleware('auth:api');
    Route::delete('/{topic}', 'TopicController@destroy')->middleware('auth:api');

    Route::group(['prefix' => '/{topic}/posts'], function () {
        Route::post('/', 'PostController@store')->middleware('auth:api');
        Route::patch('/{post}', 'PostController@update')->middleware('auth:api');
        Route::delete('/{post}', 'PostController@destroy')->middleware('auth:api');

        Route::group(['prefix' => '/{post}/likes'], function () {
            Route::post('/', 'PostLikeController@store')->middleware('auth:api');
        });
    });
});*/

Route::group(['prefix' => 'contracts'], function () {
    //Route::get('/', 'TopicController@index');
    //Route::get('/{topic}', 'TopicController@show');
    Route::post('/', 'ContractApiController@store')->middleware('auth:api');

});

Route::group(['prefix' => 'individual'], function () {
    //Route::get('/', 'TopicController@index');
    //Route::get('/{topic}', 'TopicController@show');

    Route::get('/', 'IndividualApiController@search')->middleware('auth:api');
    Route::post('/', 'IndividualApiController@store')->middleware('auth:api');
    Route::get('/{individual}', 'IndividualApiController@show')->middleware('auth:api');




});

Route::group(['prefix' => 'references'], function () {

      Route::get('/', 'IndividualApiController@showReferences')->middleware('auth:api');


});
