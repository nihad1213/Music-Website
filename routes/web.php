<?php

use Illuminate\Support\Facades\Route;

// View index page
Route::get('/', function () {
    return view('index');
});
