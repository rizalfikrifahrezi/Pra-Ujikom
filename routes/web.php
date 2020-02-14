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

Route::get('/', function () {
    return view('index');
});

Route::get('/ekstrakurikuler', function () {
    return view('ekstrakurikuler');
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

Route::get('/materipendidikan', function () {
    return view('materipendidikan');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/event-details', function () {
    return view('event-details');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
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
    Route::resource('/galeri', 'galeriController');
    Route::resource('/pendaftaran', 'PendaftaranController');
    Route::resource('/tag', 'TagController');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/pendaftaran','PendaftaranFrontendController@awal');
    Route::post('/pendaftaran','PendaftaranFrontendController@kirimdata')->name('pendaftaran');
});
