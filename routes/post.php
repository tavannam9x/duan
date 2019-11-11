<?php

Route::get('/', 'PostController@index')->name('homepost');
Route::get('add-new', 'PostController@addNew')->name('post.add');
Route::post('add-new', 'PostController@saveAddNew');
Route::get('edit/{id}', 'PostController@editForm')->name('post.edit');
Route::get('edits/{id}', 'PostController@editStatus')->name('post.edits');
Route::post('edit/{id}', 'PostController@saveEdit');
Route::get('deletePost/{id}', 'PostController@deletePost')->name('post.remove');

?>