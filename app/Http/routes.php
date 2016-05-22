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

Route::get('/', function () {
    return view('welcome');
});

/*
 *  Records
 */
Route::get( 'records', 'VinylController@index' );

Route::get( 'record/{id}', 'VinylController@show' );

/*
 *  Edit records
 */
Route::get( 'record/{id}/edit', [
    'as' => 'record.edit',
    'uses' => 'VinylController@showEdit']);

Route::put( 'record/{id}/edit', 'VinylController@edit' );

/*
 *  Artists
 */
Route::get( 'artist/{id}', 'ArtistController@show' );

/*
 *  Edit artists
 */
Route::get( 'artist/{id}/edit', [
    'as' => 'artist.edit',
    'uses' => 'ArtistController@showEdit']);

Route::put( 'artist/{id}/edit', 'ArtistController@edit' );