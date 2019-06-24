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

Route::get('/', function () {
    $cars = \App\Car::all();
    return view('allcars' ,compact('cars'));
});



Route::post('/cars','CarController@newcar')->name('car');
Route::get('/car', 'CarController@allcars');
Route::get('/car/{id}', 'CarController@particularcar');
Route::post('/car', 'CarController@newcar');

Route::get('review/{car}','ReviewsController@review')->name('getreview');
Route::get('review','ReviewsController@store')->name('review.store');
Route::get('allrevies','ReviewsController@allreviews')->name('allreviews');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
