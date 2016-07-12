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

Route::get('/', 'PublicController@home');
Route::get('/BrunnerOnStage', 'PublicController@brunnerOnStage');
Route::get('/ArtistOnStage', 'PublicController@artistOnStage');

Route::get('/News', 'PublicController@news');
Route::get('/Referenzen', 'PublicController@references');
Route::get('/Projekte', 'PublicController@projects');
Route::get('/Portrait', 'PublicController@portrait');
Route::get('/Kontakt', 'PublicController@contact');
Route::post('/Kontakt', 'PublicController@contactSend');

Route::get('/admin/index', 'AdminController@index');

Route::get('/admin/home/index', 'HomeSiteController@index');
Route::post('/admin/home/index', 'HomeSiteController@indexSave');

Route::get('/admin/brunnerOnStage/index', 'BrunnerOnStageController@index');
Route::post('/admin/brunnerOnStage/index', 'BrunnerOnStageController@indexSave');

Route::get('/admin/artistOnStage/index', 'ArtistOnStageController@index');
Route::post('/admin/artistOnStage/index', 'ArtistOnStageController@indexSave');

Route::get('/admin/portrait/index', 'PortraitController@index');
Route::post('/admin/portrait/index', 'PortraitController@indexSave');

Route::get('/admin/navigation/index', 'NavigationController@index');
Route::get('/admin/navigation/create', 'NavigationController@create');
Route::post('/admin/navigation/create', 'NavigationController@createSave');
Route::get('/admin/navigation/edit/{nav}', 'NavigationController@edit');
Route::post('/admin/navigation/edit/{nav}', 'NavigationController@editSave');
Route::get('/admin/navigation/delete/{nav}', 'NavigationController@delete');
Route::get('/admin/navigation/orderUp/{nav}', 'NavigationController@orderUp');
Route::get('/admin/navigation/orderDown/{nav}', 'NavigationController@orderDown');

Route::auth();

