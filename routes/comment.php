<?php

Route::get('/', 'CommentController@index')->name('homecomment');
Route::get('add-new', 'CommentController@addNew')->name('slideshow.add');
Route::post('add-new', 'CommentController@saveAddNew');

?>