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

Route::auth();
/*Back end*/
Route::group(['middleware'=>["web","admin"]],function(){
    
Route::get('/adminpanel/users/data',['as'=>'adminpanel/users/data','uses'=>'UsersController@anydata']);
Route::get('/adminpanel/bu/data',['as'=>'adminpanel/bu/data','uses'=>'BuController@anydata']);

Route::resource('/adminpanel/bu','BuController');
Route::get('/adminpanel','AdminController@index'); 

Route::resource('/adminpanel/users','UsersController');
Route::get('/adminpanel/users/{id}/delete','UsersController@destroy'); 
Route::post('adminpanel/users/changepassword','UsersController@changepassword'); 

Route::get('/adminpanel/bu/{id}/delete','BuController@destroy');


Route::get('adminpanel/sitesetting','SiteSettingController@index'); 
Route::post("adminpanel/sitesetting",'SiteSettingController@store');
});



/*front end*/
Route::group(['middleware'=>"web"],function(){
   
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


});