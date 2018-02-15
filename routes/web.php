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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Get all the update of college
Route::get('updates', 'UpdatesController@index')->name('updates.index');

// Create a new update
Route::get('updates/create', 'UpdatesController@create')->name('updates.create');

// Store new update
Route::post('updates', 'UpdatesController@store')->name('updates.store');

// Show an update
Route::get('updates/{update}', 'UpdatesController@show')->name('updates.show');

// Edit an update
Route::get('updates/{update}/edit', 'UpdatesController@edit')->name('updates.edit');

// Update an update
Route::patch('updates/{update}', 'UpdatesController@update')->name('updates.update');

// Delete an upda
Route::delete('updates/{update}', 'UpdatesController@delete')->name('updates.destroy');
