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

// 管理ツール
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function ()
{
  Route::get('/', function() {
    return view('admin/index');
  });
  Route::get('/jobs', function() {
    return view('admin/job/index');
  });
  Route::get('/users', function() {
      return view('admin/user/index');
  });
});

Route::namespace('Ajax')->prefix('ajax')->name('ajax.')->middleware('auth')->group(function ()
{
  Route::resource('/job', 'JobController');
  Route::get('/user', 'UserController@show')->name('user.show');
  Route::post('/user/edit', 'UserController@edit')->name('user.edit');
});

Auth::routes();
