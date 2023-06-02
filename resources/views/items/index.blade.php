@include('items.common')

<head>
    <title>管理者用 商品一覧画面</title>
</head>

<body class="index text-center">

    <h1>商品一覧画面（管理者用）</h1>
    <br>
    <button class="w-200 btn btn-lg"><a href="/registration">商品新規登録画面へ</a></button>
    <button class="w-200 btn btn-lg"><a href="/return">ホーム画面戻る</a></button>

    <side>
    <br>
    <br>
    <main>   
      
        <div>画像イメージ</div>
        <li>題名</li>
        <li>著者名</li>
        <li>ジャンル</li>
        <li>本の紹介</li>
        <li>価格</li>
        <li>在庫</li>
        <li><button><a href="/edit">商品編集画面へ</a></button></li>
        <li><button><a href="/edit/delete">商品削除</a></button></li>
       
    </main>

</body>
