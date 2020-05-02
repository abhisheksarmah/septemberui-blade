<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/personal-details', 'ProfileController@updatePersonalDetail')->name('profile.personal-details');
Route::post('/change-password', 'ProfileController@updatePersonalDetail')->name('profile.change-password');

Route::delete('/confirm', function () {
    return back();
})->name('confirm');

Auth::routes();
