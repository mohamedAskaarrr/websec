<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
   });
Route::get('/multible', function () {
return view('multible'); //welcome.blade.php
});
Route::get('/even', function () {
return view('even'); //even.blade.php
});
Route::get('/prime', function () {
return view('prime'); //prime.blade.php
});
