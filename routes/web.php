<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/date', function () {
    return view('pages.date');
}) -> name("dateDujours");

Route::get('/fruit', function () {
    return view('pages.fruit');
}) -> name("fruit");
