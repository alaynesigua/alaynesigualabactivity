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
Route::get('/', function () {
    return view('indexs');
});
Route::get('indexs', function () {
    return view('indexs');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('history', function () {
    return view('history');
});
Route::get('merch', function () {
    return view('merch');
});
