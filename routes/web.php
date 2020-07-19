<?php

Route::get('/', function(){
	return view('pages.home');
})->name('page.home');

Route::get('/news', 'PostController@index')->name('page.newslist');

Route::get('/news/{slug}', 'PostController@show')->name('page.news');

Route::post('callback', 'FormController@callbackForm')->name('form.callback');