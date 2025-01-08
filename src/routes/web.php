<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FavoriteController;


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

/*ログイン前*/
Route::get('/',[HomeController::Class,'home']);
Route::get('/look/today',[HomeController::class,'today'])->name("look.today");

/*ログイン後（ホーム画面、今日の言葉画面）*/
Route::get('/index',[MainController::Class,'index']);
Route::get('/index/today',[MainController::class,'indexToday'])->name("index.today");

/*ログイン後（お気に入り関係）*/
Route::get('/index/favorite',[FavoriteController::class,'indexFavorite'])->name("index.favorite");
