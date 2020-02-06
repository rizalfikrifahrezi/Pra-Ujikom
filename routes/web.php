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

Route::get('/welcome', function () {
    return view('welcome');
});

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

Route::get('/admin/backend', function () {
    return view('/admin/backend');
});

Route::get('/admin/kategori', function () {
    return view('/admin/kategori');
});

Route::get('/admin/tag', function () {
    return view('/admin/tag');
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

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('admin.artikel.index');
    });
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/materipendidikan', 'MateriPendidikanController');
    Route::resource('/ekstrakurikuler', 'EkstrakurikulerController');
    Route::resource('/fasilitas', 'FasilitasController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/tag', 'TagController');
});
