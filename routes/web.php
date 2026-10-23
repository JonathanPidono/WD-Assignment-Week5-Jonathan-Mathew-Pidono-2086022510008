<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Caster\DsCaster;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama'=> 'Reno Ricardo Siahaya']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {   
    return view('contact');
});