<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('mod3D.modified');
});

// routing for earth
Route::get('/earth', 'PlanetController@earth');


// routing for venus
Route::get('/venus', 'PlanetController@venus');

// routing for sun
Route::get('/sun', 'PlanetController@sun');

Route::get('/mercury','PlanetController@merury');
Route::get('/mars','PlanetController@mars');
Route::get('/jupiter','PlanetController@jupiter');
Route::get('/travel','PlanetController@travel');
Route::get('/history','PlanetController@history');
Route::get('/bio','PlanetController@bio');
Route::get('/exploration',function(){
   return view('mod3D.exploration');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
