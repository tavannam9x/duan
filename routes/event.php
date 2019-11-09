<?php

Route::get('/', 'EventController@index')->name('homeevent');
Route::get('add-new', 'EventController@addNew')->name('event.add');
Route::post('add-new', 'EventController@saveAddNew');
Route::get('edit/{id}', 'EventController@editForm')->name('event.edit');
Route::post('edit/{id}', 'EventController@saveEdit');
Route::get('deletePost/{id}', 'EventController@deletePost')->name('event.remove');

?>