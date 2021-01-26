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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function(){
    return 'welcome in my life';
});

//Route::get('admin','Admin\AdminController@show');
/*Route::group(['namespace'=>'Admin'],function()
{
    Route::get('admin','AdminController@show')->middleware('auth');
    Route::get('admin2','AdminController@show2');
});
Route::get('login',function()
{
    return'this not allaw';
})->name('login');*/
Route::resource('admin1','Admin\ResourceController');