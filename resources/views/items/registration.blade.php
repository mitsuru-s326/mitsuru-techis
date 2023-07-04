@include('items.common')

<title>料理新規登録画面</title>

<body class="text-center">

<header> 
    <h1>料理登録画面</h1>
    <button class="w-200 btn btn-lg"><a href="/item">料理一覧画面へ戻る</a></button>
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
                <p>料理名</p>
                <input class="form-control" type="text" name="title" placeholder="料理名を20文字以内で記載して下さい。" maxlength="20" required autofocus>
                <p>ジャンル</p>
                <select class="form-control" name="genre" maxlength="20" required>
                    <option value ="" selected>以下から選択して下さい。</option>
                    <option value ="和食">和食</option>
                    <option value ="洋食">洋食</option>
                    <option value ="中華">中華</option>
                    <option value ="どんぶり">どんぶり</option>
                    <option value ="麺類">麺類</option>
                </select>
                <p>料理時間</p>
                <select class="form-control" name="time" maxlength="20" required>
                    <option value ="" selected>以下から選択して下さい。</option>
                    <option value ="10分">約10分</option>
                    <option value ="20分">約20分</option>
                    <option value ="30分">約30分</option>
                    <option value ="40分">約40分</option>
                    <option value ="50分">約50分</option>
                    <option value ="60分">約60分</option>
                </select>
                <p>料理の説明</p>
                <input class="form-control" type="text" name="introduction" placeholder="料理の説明を200文字以内で分かりやすく説明して下さい。" maxlength="200" required>
                <p>料理の主な材料（買い物リスト）</p>
                <input class="form-control" type="text" name="material" placeholder="料理の材料を200文字以内で分かりやすく説明して下さい。" maxlength="200" required>
                <p>材料費 (円)</p>
                <input class="form-control" type="number" name="price" placeholder="1以上の整数を半角で記載して下さい" min="1" required>
                <p>画像のアップロード</p>
                <input class="form-control" type="file" name="image" accept="image/jpg, image/jpeg, image/png"> 
                <br>
                <button type="sumbit">登録する</button>
        </form>
    </div>
</main>

<br>
</body>