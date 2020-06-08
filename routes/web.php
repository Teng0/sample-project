<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnarie/create', "QuestionarieController@create");
Route::post('/questionnarie/store', "QuestionarieController@store");
Route::get('/questionnarie/{questionnarie}', "QuestionarieController@show");


Route::get('/questionnarie/{questionnarie}/questions/create', "QuestionController@create");
Route::post('/questionnarie/{questionnarie}/questions/', "QuestionController@store");
