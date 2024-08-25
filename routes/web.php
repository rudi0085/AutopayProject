<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/setupmaster', function () {
    return view('setupmaster');
});
Route::get('/hakakses', function () {
    return view('hakakses');
});
Route::get('/efin', function () {
    return view('efin');
});
Route::get('/uploadpremi', function () {
    return view('uploadpremi');
});
Route::get('/uploadpotongan', function () {
    return view('uploadpotongan');
});
Route::get('/hcmmaster', function () {
    return view('hcmmaster');
});
Route::get('/hcmwagetype', function () {
    return view('hcmwagetype');
});
Route::get('/managementsub', function () {
    return view('managementsub');
});
Route::get('/datagajisap', function () {
    return view('datagajisap');
});
Route::get('/kompilasigaji', function () {
    return view('kompilasigaji');
});