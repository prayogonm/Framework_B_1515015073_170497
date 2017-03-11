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
    return view('welcome');
});
Route::get('hello-word',function (){
	return 'hello-word';
});
Route::get('pengguna/{pengguna}',function ($pengguna)
	{
		return "hello word dari pengguna $pengguna";
	});
	route::get('berita/{berita?}',function ($berita = "Laravel5")
	{
		return "berita $berita belum di baca";
	});
	