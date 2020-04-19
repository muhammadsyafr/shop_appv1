<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Auth Routing
Auth::routes();

// Client Routing
Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');


// Admin Routing
Route::middleware('is_admin')->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/admin/data_barang', 'AdminController@dataBarang')->name('data_barang');
});
