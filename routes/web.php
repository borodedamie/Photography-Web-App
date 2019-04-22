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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'homeController@index')->name('home.index');

//blog
Route::get('/blog', 'homeController@blog')->name('home.blog');

//banner
Route::get('/admin', 'adminController@editBanner')->name('admin.index');
Route::post('/admin/updateBanner', 'adminController@updateBanner')->name('admin.updateBanner');

//store contact form
Route::post('/storecontact', 'homeController@storeContact')->name('home.storeContact');

//feedback
Route::get('/admin/feedback', 'adminController@feedback')->name('admin.feedback');
Route::delete('/admin/feedback/{id}', 'adminController@destroyFeedback')->name('admin.destroyFeedback');

//event
Route::get('/admin/event', 'adminController@event')->name('admin.event');
Route::get('/admin/event/new', 'adminController@newEvent')->name('admin.newEvent');
Route::post('/admin/event/stored-event', 'adminController@storeEvent')->name('admin.storeEvent');
Route::get('/admin/event/show/{id}', 'adminController@showEvent')->name('admin.showEvent');
Route::get('/admin/event/edit/{id}', 'adminController@editEvent')->name('admin.editEvent');
Route::post('/admin/event/update/{id}', 'adminController@updateEvent')->name('admin.updateEvent');
Route::get('/admin/event/delete/{id}', [
    'as' => 'admin.deleteEvent',
    'uses' => 'adminController@deleteEvent'
]);

//service
Route::get('/admin/services', 'adminController@services')->name('admin.services');
Route::get('/admin/edit/service/{id}', 'adminController@editService')->name('admin.editService');
Route::post('/admin/service/update/{id}', 'adminController@updateService')->name('admin.updateService');
Route::get('/admin/service/show/{id}', 'adminController@showService')->name('admin.showService');
