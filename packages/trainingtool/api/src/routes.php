<?php

Route::get('/api', 'ClientController@index');
Route::get('/api/login', 'ClientController@login');
Route::group(['prefix' => '/api/v1/', 'middleware' => 'jwt-auth'], function () {
    
    Route::get('/test', function() {
    	echo "Hello success JWT Auth"; die;
    });
});