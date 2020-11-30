<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','galleryController@index')->name('home');
Route::get('/gallery/{page}', 'galleryController@gallery');
Route::get('/contactme', 'galleryController@contactme');
Route::post('/contact', 'galleryController@contact');
Route::post('/gallery/showImage', 'galleryController@showImage');

Route::get('/admin', 'adminController@index')->name('admin');
Route::get('admin/{page}', 'adminController@listItems')->name('listItems');
Route::get('admin/additem/{page}', 'adminController@addItem')->name('addItem');
Route::post('admin/saveitem', 'adminController@saveItem')->name('saveItem');
Route::get('admin/edititem/{id}', 'adminController@editItem')->name('editItem');
Route::post('admin/addimage', 'adminController@addImage')->name('addImage');
Route::post('admin/updateitem', 'adminController@updateItem')->name('updateItem');
Route::get('admin/edituser', 'adminController@editUser')->name('editUser');
Route::post('admin/edituser', 'adminController@updateUser')->name('updateUser');
Route::get('admin/logout', 'adminController@logout')->name('logout');

Route::get('admin/moveitemup/{id}', 'adminController@moveItemUp')->name('moveItemUp');
Route::get('admin/moveitemdown/{id}', 'adminController@moveItemDown')->name('moveItemDown');
Route::get('admin/deleteitem/{id}', 'adminController@deleteItem')->name('deleteItem');

Auth::routes();
