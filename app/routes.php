<?php


Route::get('/', function(){
    return View::make('index');
});
//////////////API ROUTES///////////////////////
/*********************************************/
Route::group(array('prefix'=>'api'), function(){
    Route::resource('comments', 'CommentController', array('only'=>array('index', 'store', 'destroy')));
});

/*********************************************/
// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
/*App::missing(function($exception)
{
    return View::make('index');
});
*/




Route::resource('nerds', 'NerdController');

Route::get('login', array(
    'uses' => 'HomeController@showLogin'
));

Route::post('login', array(
    'uses' => 'HomeController@doLogin'
));

Route::get('logout', array(
    'uses' => 'HomeController@doLogout'
));