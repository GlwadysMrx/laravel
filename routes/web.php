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

Route::get('/','View@home');
Route::get('/listseries','View@listseries');
Route::get('/addseries','View@addseries');
Route::get('/addactors','View@addactors');
Route::get('/addgenres','View@addgenres');
Route::post('/updateserie','View@updateForm');


Route::post('/insertserie','Serie@insertOne');
Route::post('/insertactor','Actor@insertOne');
Route::post('/insertgenre','Genre@insertOne');
Route::post('/deleteserie','Serie@deleteOne');
Route::post('/deleteactor','Actor@deleteOne');
Route::post('/deletegenre','Genre@deleteOne');
Route::post('/updateserieaction','Serie@updateOne');
