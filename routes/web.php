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

// Route::get('/', function () {
//     return view('welcome');
// });

// // 商品一覧画面

//     // 商品一覧画面からの遷移を取得
//     Route::get('/', [App\Http\Controllers\ItemController::class, 'GetIndex'])->name('index');

//     // 「商品の新規登録画面へ」ボタンがクリックされたときの遷移を取得
//     Route::get('/registration', function () {
//         return view('items.registration');
//     });

//     // 「商品の編集画面へ」ボタンがクリックされたときの遷移を取得
//     Route::get('/edit', [App\Http\Controllers\ItemController::class, 'GetUpdateItem'])->name('item');

//     // 「削除」ボタンがクリックされたときの遷移を取得
//     Route::get('/edit/delete', [App\Http\Controllers\ItemController::class, 'DeleteItem'])->name('deletion');


// // 商品登録画面

//     // 「商品一覧画面へ戻る」ボタンがクリックされたときの遷移を取得
//     Route::get('/returnIndex', function () {
//         return view('items.index');
//     });

//     // 「商品新規登録画面へ」ボタンがクリックされたときの遷移を取得
//     Route::post('/registration', [App\Http\Controllers\ItemController::class, 'RegisterItem'])->name('registration');


// // 商品編集画面

//     // 「更新」ボタンがクリックされたときの遷移を取得
//     Route::post('/edit/update', [App\Http\Controllers\ItemController::class, 'UpdateItem'])->name('update');


// 商品閲覧・検索・詳細

//登録商品一覧の表示
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index']);

