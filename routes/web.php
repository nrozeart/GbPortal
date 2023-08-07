<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomePageController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [WelcomePageController::class, 'index'])
//    ->name('news.welcome');

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/hello/{name}', static function (string $name) {
//    return "Hello, $name";
//});
//
//Route::get('/AboutProject/', function () {
//    return "Information about project";
//});

//admin
Route::group(['prefix'=>'admin', 'as'=>'admin.'], static function () {
    Route::get('/',AdminController::class)->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

//news
Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/test', function() {
    return response()->download('robots.txt');
});

Route::get('/collection', function() {
    return response()->download('robots.txt');
});
