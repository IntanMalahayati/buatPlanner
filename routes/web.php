<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/planner', function () {
    return view('planner');
});
Route::get('/sertifikat', function () {
    return view('sertifikat');
});
Route::get('/sertifikat/formsertifikat', function () {
    return view('formsertifikat');
});
