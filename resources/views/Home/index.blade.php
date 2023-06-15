<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <title>ホーム画面</title>
</head>
<body>
    <div class="main-wrapper">
        <div class="btn-wrapper">
            <ul>
                <li class="list-1">
                    <a class="button" href="/search">商品一覧</a>
                 </li>
                @if(session("is_admin")==1) 
                <li class="list-2">
                    <a class="button2" href="/item">商品管理</a>
                </li>
                <li class="list-3">
                     <a class="button3" href="/list">利用者一覧</a>
                </li>
                @endif
        </div>
        <div class="content-wrapper">
            <h1>ホーム画面へようこそ</h1>
            <h2>この商品管理システムは本の在庫状況を管理するためのシステムです</h2>
        </div>
        <div class="user-wrapper">
            <div class="user-btn">
                <a class="button4" href="/logout">ログアウト</a>
            </div>
            <h3>ログイン中 {{ $user->nick_name }}さん</h3>
        </div>
    </div>
</body>
</html>