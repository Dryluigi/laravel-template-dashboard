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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.pages.login');
})->name('login.index');

Route::get('/register', function () {
    return view('auth.pages.register');
})->name('register.index');

Route::get('/dashboard', function () {
    return view('dashboard.pages.index');
})->name('dashboard.index');

Route::get('/dashboard/tables', function () {
    return view('dashboard.pages.tables');
})->name('dashboard.tables');

Route::get('/dashboard/form-basic', function () {
    return view('dashboard.pages.form-basic');
})->name('dashboard.form-basic');
