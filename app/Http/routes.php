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
Route::resource( 'record', 'RecordController' );

/*
 *  Artists
 */
Route::resource( 'artist', 'ArtistController' );


Route::auth();

Route::post('record/store-from-discogs', 'RecordController@storeFromDiscogs');