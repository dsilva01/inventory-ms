<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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

Route::get('/joined', function () {
    


});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductController');
Route::resource('categories','CategoryController');

Route::get('/account/deposit', [AccountController::class, 'deposit']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
  
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');


// Route::get('/categories', 'CategoryController@index');
// Route::get('/products/index', 'ProductController@index');
// Route::get('/products/create', 'ProductController@create');