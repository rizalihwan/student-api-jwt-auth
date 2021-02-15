<?php

// auth
Route::namespace('Auth')->prefix('user')->group(function(){
    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');
    Route::post('/logout', 'AuthController@logout');
});

Route::namespace('API')->middleware('auth:api')->group(function(){
    Route::prefix('student')->group(function(){
        Route::get('/', 'StudentController@index');
        Route::post('/store', 'StudentController@store');
        Route::get('/show/{student}', 'StudentController@show');
        Route::delete('/delete/{student}', 'StudentController@destroy');
        Route::patch('/update/{student}', 'StudentController@update');
    });
});
