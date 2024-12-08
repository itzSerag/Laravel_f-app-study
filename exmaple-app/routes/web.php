<?php

use Illuminate\Support\Facades\Route;

// home directory here
Route::get('/', function () {
    return view('welcome');
});


Route::get('/products/{product_name}', function ($product_name) {
    return redirect()->route('hello') ;
})->name('hello');

Route::get('/myView', function () {
    return view('index' , ['name' => 'serag']);
});


// we can make a not found route for ourselves
Route::fallback(function () {
    return view('');
});