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
Auth::routes(['verify'=>true]);
Route::get('/home','HomeController@index')->name('home');

/*Route::get('/howyda',function(){
    return 'welcome in my life';
});
//type of route id
//1)optional {id?}
//2)required {id}

//required id
Route::get('/howyda/{id}',function(){
    return 'welcome in my life'.'my age is : {id}';
});
//optional id
Route::get('/howyda/{id?}',function(){
    return 'again welcome in my life';
});
//route name
Route::get('/howyda',function(){
    return 'welcome in my life';
})->name('a');
//group
Route::namespace('Front')->group(function(){
    Route::get('user','Usercontroller@ShowUserName');
});
//middleware
Route::group(['prefix'=>'users','middleware'=>'auth'],function()
{
    Route::get('/', function () {
        return 'ahmed';
    });
});
Route::get('first','FirstController@show');
//views
Route::get('index','ViewController@index');
Route::get('/load','ViewController@index');
Route::get('football','FootballController@show');
Route::get('if','FirstController@show');*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
