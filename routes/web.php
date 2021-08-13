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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');


Route::get('/receipt', function() { 

return view('admin.receipt ') ;

})->middleware ('auth'); 



Route::post('/receipt','receiptController@store')->middleware ('auth'); 


Route::get('/all-receipts', 'receiptController@index')->middleware ('auth'); 

Route::get('/delete/{id}','receiptController@delete' )->middleware ('auth'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
