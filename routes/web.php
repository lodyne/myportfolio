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

// Route::get('/', function () {
//     return view('welcome');
// });

//! Route that connect directly to Template
/*
Route::get('/', function () {
    return view('template.home');
});
*/

// Routes  that connect to Controller
Route::get('/', 'PagesController@home' ) ->name('home');

Route::get('/about', 'PagesController@about' ) ->name('about');

Route::get('/portfolio', 'PagesController@portfolio' ) ->name('portfolio');

Route::get('/testimonials', 'PagesController@testimonials' ) ->name('testimonials');

Route::get('/contact', 'PagesController@contact' ) ->name('contact');



// Route::get('/welcome',function (){
//     return '<h1>WELCOME HOME</h1>';
// });

Route::get('/welcome','PagesController@welcome')->name('welcome');

// Dynamic Routing

/* Route::get('/users/{id}/{user}',function ($id,$name){
    return 'This is '.$name. 'with id' .$id;
    });
*/

Route::resource('posts', 'PostsController');
