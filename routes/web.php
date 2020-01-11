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

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/classes', function () {
    return view('classes');
});

Route::get('/classes-details', function () {
    return view('classes-details');
});

Route::get('/trainer', function () {
    return view('trainer');
});

Route::get('/trainer-details', function () {
    return view('trainer-details');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/event-details', function () {
    return view('event-details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/contact', function () {
    return view('contact');
});
