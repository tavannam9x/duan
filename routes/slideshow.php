<?php

Route::get('/', 'SlideshowController@index')->name('homeslide');
Route::get('add-new', 'SlideshowController@addNew')->name('slideshow.add');
Route::post('add-new', 'SlideshowController@saveAddNew');
Route::get('edit/{id}', 'SlideshowController@editForm')->name('slideshow.edit');
Route::post('edit/{id}', 'SlideshowController@saveEdit');
Route::get('deletePost/{id}', 'SlideshowController@deletePost')->name('slideshow.remove');

?>