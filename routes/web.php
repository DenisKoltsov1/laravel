<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('form');
})->name('home');

#oute::get('/', function () {
#    return view('welcome');
#});

Route::get('/createdDocument', function () {
    return view('createdDocument');
})->name('createdDocument');

Route::get('/doc', function () {
    return view('doc');
})->name('doc');


Route::post('/doc', function () {
    return view('/doc');
})->name('contactForm');

Route::get('/doc', function () {
    return view('/doc');
})->name('contactForm');

Route::post('/pro', function () {
    return view('/pro');
})->name('contactForm');

