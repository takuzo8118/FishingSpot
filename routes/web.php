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
// 最初から書いてあるものだが、今後変更する→indexへ飛ばす処理（投稿一覧ページ）
Route::get('/', function () {
    return view('index');
});
// こちらの記述を消してしまうとログインできなくなってしまうため注意が必要
Auth::routes();
// login機能の実装（laravel/ui）
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
