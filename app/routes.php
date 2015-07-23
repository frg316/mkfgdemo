<?php

// =============================================
// HOME PAGE ===================================
// =============================================
Route::get('/', function()
{
	return View::make('users.login');
});

// =============================================
// API ROUTES ==================================
// =============================================
Route::group(array('prefix' => 'api'), function() {

	// since we will be using this just for CRUD, we won't need create and edit
	// Angular will handle both of those forms
	// this ensures that a user can't access api/create or api/edit when there's nothing there
	Route::resource('comments', 'CommentController', 
		array('except' => array('create', 'edit', 'update')));

});

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
App::missing(function($exception)
{
	return View::make('users.login');
});

Route::group(array('before' => 'auth'), function(){
    // your routes
    Route::get('index', array('uses' => 'CommentController@showComments'));

	//maps
	Route::get('maps', array('uses' => 'DataMapController@index'));

	Route::get('logout', array('uses' => 'LoginController@doLogout'));

    Route::get('/', function(){
    	return View::make('users.login');
    });
});


Route::get('login', array('uses' => 'LoginController@showLogin'));

Route::post('login', array('uses' =>'LoginController@doLogin'));

Route::get('register', array('uses' => 'CreateAcctController@showAcct'));

Route::post('register', array('uses' =>'CreateAcctController@createAcct'));

