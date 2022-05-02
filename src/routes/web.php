<?php

use Illuminate\Http\Request;

Route::group(['namesapce'=> 'ankit123\contact\Http\Controllers'], function(){

    Route::get('contact','ankit123\contact\Http\Controllers\ContactController@index')->name('contact');
    
    Route::post('contactsubmit', 'ankit123\contact\Http\Controllers\ContactController@send')->name('contactsubmit');

});