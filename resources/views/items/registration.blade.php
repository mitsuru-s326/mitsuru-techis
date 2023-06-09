@include('items.common')

<title>商品新規登録画面</title>

<body class="text-center">

<header>
    <h1>商品登録画面</h1>
    <button class="w-200 btn btn-lg"><a href="/item">商品一覧画面へ戻る</a></button>
</header>

<br>

<main>
    <div class="registration-book-details">
        <form action="{{ url('item/registration')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf      
                <p>題名</p>
                <input class="form-control" type="text" name="title" placeholder="題名" maxlength="100" required autofocus>
                <p>著者名</p>
                <input class="form-control" type="text" name="author" placeholder="著者名" maxlength="100" required>
                <p>出版社</p>
                <input class="form-control" type="text" name="publisher" placeholder="出版社名" maxlength="100" required>
                <p>ジャンル</p>
                <select class="form-control" name="genre" placeholder="選択してください。" maxlength="100" required>
                    <option value ="趣味">趣味</option>
                    <option value ="コミック">コミック</option>
                    <option value ="プログラミング">プログラミング</option>
                    <option value ="料理">料理</option>
                    <option value ="旅行">旅行</option>
                </select>
                <p>本の紹介</p>
                <input class="form-control" type="text" name="introduction" placeholder="お客様に本の概要を分かりやすく説明して下さい。" maxlength="100" required>
                <p>画像のアップロード</p>
                <input class="form-control" type="file" name="image">
                <p>価格 (円)</p>
                <input class="form-control" type="number" name="price" placeholder="" min="0" required>
                <p>在庫数 (冊)</p>
                <input class="form-control" type="number" name="inventory" placeholder="" min="0" required> 
                <br>
                <button type="sumbit">登録する</button>
        </form>
    </div>
</main>

<br>
</body>