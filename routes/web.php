<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('kedua', function () {
	return view('tugasdesignlinktree');
});

Route::get('ketiga', function () {
	return view('latihankode5');
});

Route::get('keempat', function () {
	return view('js2');
});

Route::get('kelima', function () {
	return view('js1');
});

Route::get('keenam', function () {
	return view('bootstrap2');
});

Route::get('ketujuh', function () {
	return view('bootstrap1');
});

Route::get('kedelapan', function () {
	return view('latihangrid');
});

Route::get('tugasets', function () {
	return view('ETS');
});


Route::get('frontend', function () {
	return view('kumpulanlink');
});

