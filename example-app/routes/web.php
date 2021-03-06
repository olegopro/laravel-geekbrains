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

Route::get('/name/{name}', function (string $name): string {
    return "Hello, {$name}";
});

Route::any('/post/{var}', function (string $variable): string {
    return "post var: ${variable}";
});


Route::view('/post/{var}', 'welcome');
