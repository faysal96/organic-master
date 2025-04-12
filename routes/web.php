<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/app', function(){
    return view('layout.app');
});