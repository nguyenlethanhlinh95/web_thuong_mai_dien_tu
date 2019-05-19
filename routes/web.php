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

Route::get('/', function (){
    return view('front.pages.home');
})->name('homepage');

Route::get('/about', function (){
    return view('front.pages.about');
});

/*
 * Route Shop
 * */
Route::get('/shop','HomeController@shop');

/*
 * End Route Shop
 * */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
