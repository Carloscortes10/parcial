<?php


Route::get('/', function () {
    return view('auth.login');
});
Route::POST('login','Auth\loginController@login')->name('login');
