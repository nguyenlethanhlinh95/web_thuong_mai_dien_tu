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

Route::get('/contact', function (){
    return view('front.pages.contact');
})->name('contact');

/*
 * Route Shop
 * */
Route::get('/shop','HomeController@shop');

/*
 * End Route Shop
 * */
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
