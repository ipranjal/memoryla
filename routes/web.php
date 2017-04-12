<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Social Authentication module
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');


Route::get('/', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');

//Dear Diary
Route::get('/diary/editor','DiaryController@editor');
Route::post('/diary/editor','DiaryController@post');
Route::get('/diary','DiaryController@view');

//demo
Route::get('/setup/{id}',function($id){
   return view('setup.'.$id); 
});

