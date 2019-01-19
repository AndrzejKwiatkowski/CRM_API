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


Route::group([
	//'middleware' => 'auth.api'
], function () {
	Route::resources( [
        'events' => 'EventsController',
        'roles' => 'RolesController'
	] );
	Route::get( 'events/my-events/{user}', 'EventsController@myEvents' );
	Route::post('logout', 'AuthController@logout');
	Route::post('refresh', 'AuthController@refresh');
});
Route::post('login', 'AuthController@login');
