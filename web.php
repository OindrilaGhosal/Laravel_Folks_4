<?php

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

