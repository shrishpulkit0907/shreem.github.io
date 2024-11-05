<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('frontend.index');});
Route::get('/digital-marketing', function () {return view('frontend.digital-marketing');});
Route::get('/seo', function () {return view('frontend.seo');});
Route::get('/seo2', function () {return view('frontend.seo2');});
Route::get('/smo', function () {return view('frontend.smo');});
Route::get('/website-development', function () {return view('frontend.website-development');});
