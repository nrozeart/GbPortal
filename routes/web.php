<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello/{name}', static function (string $name) {
    return "Hello, $name";
});

Route::get('/AboutProject/', function () {
    return "Information about project";
});
Route::get('/news/{id}', static function (int $id) {
    return "News $id";
});
