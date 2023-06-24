<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/','App\Http\Controllers\HomeController@index')->name('index');
Route::get('/about','App\Http\Controllers\HomeController@about')->name('about');
Route::get('/contact','App\Http\Controllers\HomeController@index')->name('contact');
Route::get('/post/{slug}','App\Http\Controllers\HomeController@post')->name('post');

Route::get('/contact','App\Http\Controllers\ContactController@show')->name('show.contact');
Route::post('/contact','App\Http\Controllers\ContactController@mailToAdmin')->name('mail.contact');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
