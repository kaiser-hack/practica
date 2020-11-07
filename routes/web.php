<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');





//Route::get('/portafolio', 'PortafolioController@index')->name('index');

Route::resource('portafolio', 'PortafolioController');

route::get('contact',
function(){
    return view('contact');
})->name('contact');

Route::post('contact', 'MessagesController@store');
Auth::routes();

Route::get('/about', function () {
    return view('about');
})->name('about');