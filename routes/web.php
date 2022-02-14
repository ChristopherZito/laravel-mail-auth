<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'SubController@home') -> name('home');
//login-logout-register
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::get('logout', 'Auth\LoginController@logout') -> name('logout');
//axios
Route::get('/axios/videogames', 'SubController@getGames')-> name('get_videogames');
//delete
Route::get('/axios/videogame/delete/{id}', 'SubController@deleteGames')-> name('delete_videogames');