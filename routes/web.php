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

Route::get('/', 'HomeController@index')->name('home');

Route::resources([
    'bidangs' => 'BidangController',
    'sub-bidangs' => 'SubBidangController',
    'sub-sub-bidangs' => 'SubSubBidangController'
    
]);

Route::group(['prefix' => 'bidangs'], function () {
    Route::get('/list/hierarchy', 'BidangController@hierarchy')->name('bidangs.hierarchy');
    Route::get('/list/readbidang', 'BidangController@readbidang')->name('bidang.readbidang');
    Route::get('/list/question', 'QuestionController@show')->name('question');
});

