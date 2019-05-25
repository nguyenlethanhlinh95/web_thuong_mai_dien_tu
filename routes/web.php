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
})->name('about');

Route::get('/contact', function (){
    return view('front.pages.contact');
})->name('contact');

/*
 * Route Shop
 * */
Route::get('/shop','HomeController@shop')->name('shop');
Route::get('/products','HomeController@shop');
Route::get('/product_details/{id}', 'HomeController@product_details')->name('product_detail');

Route::get('/cart/addItem/{id}', 'CartController@addItem')->name('cart_add');

/*
 * End Route Shop
 * */
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

/*
 * admin
 * */
Route::group(['prefix' => 'admin','middleware'=>['auth','admin']],
    function () {
        Route::get('/', function () {
            return view('admin.pages.index');
        })->name('admin.index');

        Route::resource('product','ProductsController');
        Route::resource('category','CategoriesController');
 }); // end route group

