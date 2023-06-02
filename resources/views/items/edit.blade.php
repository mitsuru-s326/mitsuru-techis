@include('items.common')

<head>
    <title>商品編集・削除画面</title>
</head>

<body class="edit text-center">

    <h1>商品編集画面</h1>
  
    <main class="form-edit">
    
        <button class="w-200 btn btn-lg"><a href="/returnIndex">商品一覧画面へ戻る</a></button>
        <br>
        <br>
        <div> 商品ID <div>

        <form action="{{ url('edit/update')}}" method="POST" class="form-horizontal">@csrf      
            <div>題名</div>
            <input class="form-control" type="text" name="title" placeholder="題名" maxlength="128" required autofocus>
            <div>著者名</div>
            <input class="form-control" type="text" name="author" placeholder="著者名" maxlength="128" required>
            <div>ジャンル</div>
            <select class="form-control" name="genre" placeholder="選択してください。" maxlength="254" required>
                <option value ="趣味">趣味</option>
                <option value ="コミック">コミック</option>
                <option value ="プログラミング">プログラミング</option>
                <option value ="料理">料理</option>
                <option value ="旅行">旅行</option>
            </select>
            <div>本の紹介</div>
            <input class="form-control" type="text" name="introduction" placeholder="お客様に本の概要を分かりやすく説明して下さい。" maxlength="1000" required>
            <div>画像のアップロード</div>
            <input class="form-control" type="file" name="image">
            <div>価格 (円)</div>
            <input class="form-control" type="number" name="introduction" placeholder="" maxlength="7" required>
            <div>在庫数 (冊)</div>
            <input class="form-control" type="number" name="introduction" placeholder="" maxlength="7" required> 
            <br>
            <button class="w-100 btn btn-lg" type="sumbit">更新する</button>
        </form>

    </main>

</body>