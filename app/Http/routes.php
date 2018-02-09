<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome', ['home'=> 'active' ]);
});
Route::get('/services', function () {
    return view('content.services', ['services'=> 'active' ]);
});
Route::get('/blog', function () {
    return view('content.blog', ['blog'=> 'active' ]);
});
Route::get('/portofolio', function () {
    return view('content.portofolio', ['portofolio'=> 'active' ]);
});
Route::get('/contact', function () {
    return view('content.contact', ['contact'=> 'active' ]);
});
Route::get('/admin', function () {
    return view('admin.adminbiasa.welcome');
});
Route::get('/superadmin', function () {
    return view('admin.superadmin.welcome');
});
Route::resource('/admin/berita','BeritasController');
Route::resource('/lokasi','LocationsController');

Route::auth();

Route::get('/home', 'HomeController@index');
