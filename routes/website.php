<?php
Route::get('/', 'TrangchuController@index')->name('trangchu');
Route::get('gioithieu', 'TrangchuController@gioithieu')->name('gioithieu');
Route::get('lienhe', 'TrangchuController@lienhe')->name('lienhe');
Route::post('lienhe', 'TrangchuController@saveAddnew');
Route::get('sanpham/{id}', 'TrangchuController@sanpham')->name('sanpham');

Route::get('tintuc/{id}', 'TrangchuController@tintuc')->name('tintuc');
Route::get('chitietsanpham/{id}', 'TrangchuController@chitiet')->name('chitietsp');
Route::post('chitietsanpham/{id}', 'TrangchuController@saveAdd');
Route::get('chitietbaiviet/{id}', 'TrangchuController@chitietbv')->name('chitietbv');
Route::post('chitietbaiviet/{id}', 'TrangchuController@saveAddpost');

?>