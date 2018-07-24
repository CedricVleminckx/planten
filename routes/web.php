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
use App\Http\Controllers;

Route::get('/', 'PlantsController@plants');
Route::get('/plant/{id}', 'PlantsController@detail');
Route::post('/search', 'PlantsController@search');

Route::get('/Add', 'AdminController@add');
Route::get('/Edit/{id}', 'Admincontroller@edit');
Route::post('/Post', 'AdminController@post');
Route::post('/Update/{id}', 'AdminController@update');
Route::get('/Delete/{id}', 'AdminController@delete');

Route::get('/Login', function () {
    return view('auth.login');
});
Route::get('/Logout', function () {
    Auth::logout();
    return redirect('/');
});
Auth::routes();
