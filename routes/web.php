<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\Admin\UsersController as AdminUsersController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use \App\Http\Controllers\Admin\NewsController as AdminNewsController;
use \App\Http\Controllers\Admin\ParserController;
use \App\Http\Controllers\Auth\SocialController as SocialController;

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
//News routes

Route::get('/', [NewsController::class, 'index'])
    ->name('news');
Route::get('/news/{news}', [NewsController::class, 'showNews'])
    ->name('news.show');






//Admin routes
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware' => 'admin.check'],function(){
    Route::get('/', AdminController::class)
        ->name('index');
    Route::get('parser', ParserController::class)
        ->name('parser');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
    Route::resource('users', AdminUsersController::class);

});
Route::resource('account', AccountController::class);

Auth::routes();

//Socials routes
Route::group(['middleware' => 'guest'], function (){
    Route::get('/auth/{network}/redirect', [SocialController::class, 'index'])
        ->where('network', '\w+')
        ->name('auth.redirect');
    Route::get('/auth/{network}/callback', [SocialController::class, 'callback'])
        ->where('network', '\w+')
        ->name('auth.callback');
});
