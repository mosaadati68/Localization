<?php

use Illuminate\Support\Facades\Session;

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
    return view('welcome');
});

Route::get('/language', function () {
    return view('languages');
});

Route::get('/language/{locale}', function ($locale) {

    Session::put('locale', $locale);
    return redirect()->back();
})->name('language');

