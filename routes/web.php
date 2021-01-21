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

//Route::get('/', function () {
//    $data=[];
//    $data['id']=5;
//    $data['name']='vanthuan';
//    return view('welcome',compact('data'));
//});
Route::get('index','Front\UserController@index')->name('admin.user');
//namespace
//Route::namespace('Front')->group(function () {
//    Route::get('users','UserController@index')->name('ad');
//});
////Group
//Route::group(['prefix'=>'users'],function (){
//    Route::get('/',function (){
//       return "Test";
//    });
//});
//Route::resource('test','Front\UserController');
Route::get('/landing',function (){
   return view('landing');
});
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/',function (){
return 'home';
});
Route::get('/dashboard',function (){
    return "dashboard";
});