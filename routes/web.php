<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('people', 'PeopleController');
Route::resource('device', 'DeviceController');
Route::resource('sector', 'SectorController');
Route::resource('router', 'RouterController');

/*
Route::get('/device/{id}/location/{startTime?}/{endTime?}', 'DeviceController@showLocation')
    ->name('device.showLocation');
 */
