@include('items.common')

<title>商品新規登録画面</title>

<body class="text-center">

<header> 
    <p><b>本画面はプログラミング学習用に作成されたものであり、実際の商品の販売を目的としたものではありません。</b></P><br>
    <h1>商品登録画面</h1>
    <button class="w-200 btn btn-lg"><a href="/item">商品一覧画面へ戻る</a></button>
</header>

<br>

<main>

    <!-- 全てのエラーを一括表示する場合のコード -->
    @foreach ($errors->all() as $error)
    <div class="error-display"><li>{{ $error }}</li></div>
    @endforeach 

    <div class="registration-book-details">
        <form action="{{ url('item/registration')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf      
                <p>題名</p>
                <input class="form-control" type="text" name="title" placeholder="題名を20文字以内で記載して下さい。" maxlength="20" required autofocus>
                <p>著者名</p>
                <input class="form-control" type="text" name="author" placeholder="著者名を20文字以内で記載して下さい。" maxlength="20" required>
                <p>出版社</p>
                <input class="form-control" type="text" name="publisher" placeholder="出版社名を20文字以内で記載して下さい。" maxlength="20" required>
                <p>ジャンル</p>
                <select class="form-control" name="genre" maxlength="20" required>
                    <option value ="" selected>以下から選択して下さい。</option>
                    <option value ="趣味">趣味</option>
                    <option value ="コミック">コミック</option>
                    <option value ="プログラミング">プログラミング</option>
                    <option value ="料理">料理</option>
                    <option value ="旅行">旅行</option>
                </select>
                <p>本の概要</p>
                <input class="form-control" type="text" name="introduction" placeholder="お客様に本の概要を200文字以内で分かりやすく説明して下さい。" maxlength="200" required>
                <p>画像のアップロード</p>
                <input class="form-control" type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" required>
                <p>価格 (円)</p>
                <input class="form-control" type="number" name="price" placeholder="1以上の整数を半角で記載して下さい" min="1" required>
                <p>在庫数 (冊)</p>
                <input class="form-control" type="number" name="inventory" placeholder="0以上の整数を半角で記載して下さい" min="0" required> 
                <br>
                <button type="sumbit">登録する</button>
        </form>
    </div>
</main>

<br>
</body>