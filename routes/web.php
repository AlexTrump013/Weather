<?php

use Illuminate\Support\Facades\Route;

Route::get('lvivWeatherCURL', 'Weather\WeatherController@lvivWeatherCURL')->name('lvivWeatherCURL');
Route::get('kharkivWeatherCURL', 'Weather\WeatherController@kharkivWeatherCURL')->name('kharkivWeatherCURL');
Route::get('lvivWeatherLaravel', 'Weather\WeatherController@lvivWeatherLaravel')->name('lvivWeatherLaravel');
Route::get('kharkivWeatherLaravel', 'Weather\WeatherController@kharkivWeatherLaravel')->name('kharkivWeatherLaravel');


