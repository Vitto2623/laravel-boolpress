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

Route::resource('guests', 'HomeController');

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index' )->name('home');
    Route::resource('posts', 'postController');
});


Route::get('/contacts', 'ContactsController@contact')->name('guest.contact');

Route::post('/contacts', 'ContactsController@contactStore')->name('guest.store');

Route::get("{any?}", function(){
    return view('guest.home');
})->where('any', '.*');
