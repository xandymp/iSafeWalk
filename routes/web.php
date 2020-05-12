<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('people', 'PeopleController');
Route::resource('device', 'DeviceController');
Route::get('/device/{id}/location/', 'DeviceController@showLocation')
    ->name('device.showLocation');
Route::resource('sector', 'SectorController');
Route::resource('router', 'RouterController');
