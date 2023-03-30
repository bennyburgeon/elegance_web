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

Route::get('/',['as' => 'dashboard', 'uses'=>'WebController@index']);
Route::get('salons',['as' => 'salons', 'uses'=>'WebController@salons']);
Route::get('treatemnts',['as' => 'treatemnts', 'uses'=>'WebController@treatemnts']);
Route::get('offers',['as' => 'offers', 'uses'=>'WebController@offers']);
Route::get('appointment',['as' => 'appointment', 'uses'=>'WebController@appointment']);
Route::get('packages',['as' => 'packages', 'uses'=>'WebController@packages']);
Route::get('careers',['as' => 'careers', 'uses'=>'WebController@careers']);
Route::get('contacts',['as' => 'contacts', 'uses'=>'WebController@contacts']);


Route::get('login',['as' => 'login', 'uses'=>'LoginController@login']);
Route::post('customer-check-login',['as' => 'customers.check.login', 'uses'=>'LoginController@checkLogin']);
Route::group(['middleware'=>['customer']],function(){
    Route::get('customer-portal',['as' => 'customer.portal', 'uses'=>'WebController@customerPortal']);
});