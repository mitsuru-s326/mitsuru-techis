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

// ログイン画面
    //ログイン画面を取得
        Route::get('/', [App\Http\Controllers\AccountController::class, 'login']);

// アカウント登録画面
    //アカウント登録画面を取得
        Route::get('/toroku', [App\Http\Controllers\AccountController::class, 'toroku']);
        // 「アカウント登録」ボタンがクリックされたときの遷移を取得
        Route::post('/UserRegister', [App\Http\Controllers\AccountController::class, 'UserRegister'])->name('UserRegister');
        // アカウント編集画面
        //アカウント編集画面を取得
        Route::get('/edit/{id}', [App\Http\Controllers\AccountController::class, 'edit']);
        // 「編集」ボタンがクリックされたときの遷移を取得
        Route::post('/AccountEdit', [App\Http\Controllers\AccountController::class, 'AccountEdit']);
        // 「アカウント削除」ボタンがクリックされたときの遷移を取得
        Route::post('AccountDestroy', [App\Http\Controllers\AccountController::class, 'AccountDestroy']);
        //ログイン認証
        Route::post('/auth',[App\Http\Controllers\AccountController::class, 'loginAuth'] );

//ミドルウェア（アカウント認証機能）

    //ログイン情報があるかどうかをチェックするミドルウェア
    Route::middleware(['login_auth'])->group(function () {

        //ログアウト機能
        Route::get('/logout',[App\Http\Controllers\AccountController::class, 'logoutAuth'] );

        // ホーム画面//
        Route::get('/home',[App\Http\Controllers\HomeController::class, 'home']);

        // 商品閲覧・検索・詳細

        //登録商品一覧の表示
        Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index']);

        //登録商品の詳細画面
        Route::get('/search/detail/{id}', [\App\Http\Controllers\SearchController::class, 'detail']);
        
        //献立に登録する機能
        Route::post('/menu', [App\Http\Controllers\ItemController::class, 'Menu']);

    });


//管理者（is_adminが"１"の登録）のログイン情報があるかどうかをチェックするミドルウェア
    Route::middleware(['login_admin'])->group(function () {

    //アカウント一覧画面

        //アカウント一覧画面を取得
        Route::get('/list', [App\Http\Controllers\AccountController::class, 'list']);

        // 商品一覧画面を表示する場合はここを通す
        Route::get('item/', [App\Http\Controllers\ItemController::class, 'GetIndex'])->name('index');

        // 商品一覧画面

        // 「商品の新規登録画面へ」ボタンがクリックされたときの遷移を取得
        Route::get('item/registration', function () {
            return view('items.registration');
        });

        // 「ホーム画面に戻る」ボタンがクリックされたときの遷移を取得
        Route::get('item/home', [App\Http\Controllers\ItemController::class, 'ReturnHome'])->name('return');;

        // 「商品の編集画面へ」ボタンがクリックされたときの遷移を取得
        Route::get('item/edit/{id}', [App\Http\Controllers\ItemController::class, 'GetUpdateItem'])->name('item');

        // 「削除」ボタンがクリックされたときの遷移を取得
        Route::get('item/edit/delete/{id}', [App\Http\Controllers\ItemController::class, 'DeleteItem'])->name('deletion');

        // // 商品登録画面

        // 「商品新規登録画面へ」ボタンがクリックされたときの遷移を取得
        Route::post('item/registration', [App\Http\Controllers\ItemController::class, 'RegisterItem'])->name('registration');

        // // 商品編集画面

        // 「更新」ボタンがクリックされたときの遷移を取得
        Route::post('item/edit/update/{id}', [App\Http\Controllers\ItemController::class, 'UpdateItem'])->name('update');

});


