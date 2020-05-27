<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('people', 'PeopleController');
Route::resource('device', 'DeviceController');
Route::resource('zone', 'ZoneController');
Route::resource('sector', 'SectorController');
Route::resource('router', 'RouterController');
Route::get('/people/{id}/location-map', 'PeopleController@locationMap')
    ->name('people.locationMap');
Route::get('/people/{id}/interactions', 'PeopleController@interactions')
    ->name('people.interactions');
