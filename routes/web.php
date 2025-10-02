<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/material-in', function () {
    return view('pages.material-in');
});

Route::get('/material-out', function () {
    return view('pages.material-out');
});

Route::get('/stock-balance', function () {
    return view('pages.stock-balance');
});

Route::get('/settings', function () {
    return view('pages.settings');
});
Route::get('/login', function () {
    return view('pages.login');
});
