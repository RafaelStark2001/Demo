<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contac', function () {
    return view('contac');
});


Route::post('/crear-contacto', function (Request $request) {
    dd($request->all(), $request->user_name);
});
