<?php

use Illuminate\Http\Request;

Route::group(['namesapce'=> 'ankit\contact\Http\Controllers'], function(){

    Route::get('contact','ankit\contact\Http\Controllers\ContactController@index')->name('contact');
    
    Route::post('contactsubmit', 'ankit\contact\Http\Controllers\ContactController@send')->name('contactsubmit');

});