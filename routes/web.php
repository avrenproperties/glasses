<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')
	->name('home');

Route::prefix('admin')->group(function () {});
