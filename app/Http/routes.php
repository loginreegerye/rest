<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {

//-------------------------------------------------------------------------------------------------------------------------------
	Route::resource('missions', 'MissionsController', ['only' => ['index', 'store']]);

	Route::resource('objectives', 'ObjectivesController', ['only' => ['index', 'store']]);

	Route::resource('staff_members', 'StaffMembersController', ['only' => ['index', 'store']]);
//-------------------------------------------------------------------------------------------------------------------------------

	Route::resource('mission', 'MissionController', ['only' => ['show', 'update', 'destroy']]);

	Route::resource('objective', 'ObjectiveController', ['only' => ['show', 'update']]);

	Route::resource('staff_member', 'StaffMemberController', ['only' => ['show', 'update']]);
});
