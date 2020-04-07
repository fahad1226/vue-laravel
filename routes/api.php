<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/employee','EmployeeController@all');

Route::get('/tools', function() {
	
	return ['Laravel','Vue','PHP','Lumen','Tooling'];
});


Route::post('/store','EmployeeController@store');

Route::get('/edit/{id}','EmployeeController@edit');


Route::post('/update/{id}','EmployeeController@update');