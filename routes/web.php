<?php

use Illuminate\Support\Facades\Route;

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
// Authentication
Auth::routes();
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('/', function () {
    return view('ca_home');
});
Route::redirect('/login', '/', 301);
Route::redirect('/register', '/', 301);
Route::redirect('/password/reset', '/', 301);
// CA Page
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update', 'HomeController@update')->name('update');
Route::post('/edit/{id}', 'HomeController@edit')->name('updateca');
Route::get('/upload/{id}', 'HomeController@upload')->name('upload');
Route::post('/upload/{id}', 'HomeController@store')->name('store');
Route::post('/upload2/{id}', 'HomeController@store1')->name('store1');


// Only for admin
Route::get('/admin', 'DashboardController@index')->name('dashboard');
Route::get('/admin/tasks', 'DashboardController@showTask')->name('tasks');
Route::get('/admin/tasks/create', 'DashboardController@createTask')->name('createTask');
Route::post('/admin/tasks', 'DashboardController@storeTask')->name('storeTask');
Route::get('/admin/tasks/{id}', 'DashboardController@editTask')->name('editTask');
Route::put('/admin/tasks/{id}', 'DashboardController@updateTask')->name('updateTask');
Route::delete('/admin/tasks/{id}', 'DashboardController@deleteTask')->name('deleteTask');
Route::get('/admin/uploads', 'DashboardController@viewUploads')->name('viewUploads');
Route::get('/admin/uploads/view/{id}', 'DashboardController@viewTaskUpload')->name('viewTaskUpload');
Route::get('/admin/uploads/verify/{user}/{id}', 'DashboardController@verifyUpload')->name('verifyUpload');
Route::get('/admin/uploads/reject/{user}/{id}', 'DashboardController@rejectUpload')->name('rejectUpload');
Route::get('/admin/uploads/verifyAll/{id}', 'DashboardController@verifyAll')->name('verifyAll');
Route::get('/admin/uploads/rejectAll/{id}', 'DashboardController@rejectAll')->name('rejectAll');
Route::get('/admin/uploadsbyuser/{ca_id}', 'DashboardController@verifybyuser')->name('verifybyuser');
