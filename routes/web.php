<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')
	->name('home');

Route::get('/testing', function() {
	echo \App\Http\Helpers\HTML::getRandomBanner();
});

Route::prefix('admin')->group(function () {});

Auth::routes();
