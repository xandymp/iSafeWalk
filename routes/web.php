<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('people', 'PeopleController');
Route::resource('beacon', 'BeaconController');
Route::resource('zone', 'ZoneController');
Route::resource('sector', 'SectorController');
Route::resource('gateway', 'GatewayController');
Route::get('/people/{id}/location-map', 'PeopleController@locationMap')
    ->name('people.locationMap');
Route::get('/people/{id}/interactions', 'PeopleController@interactionsFilter')
    ->name('people.interactions-filter');
Route::post('/people/{id}/interactions', 'PeopleController@interactions')
    ->name('people.interactions');
