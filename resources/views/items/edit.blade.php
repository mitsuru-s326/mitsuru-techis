@include('items.common')

<head>
    <title>商品編集・削除画面</title>
</head>

<body class="text-center">

<header>
    <h1>商品編集画面</h1>
    <button class="w-200 btn btn-lg"><a href="/item">商品一覧画面へ戻る</a></button>
</header> 

<br>

<main>
    <div><b>商品番号"{{$item->id}}"</b><div>

    <div class="book-image">
        <img src="data:image/png;base64,{{$item->image}}" alt="image">
    </div> 

    @if ($errors->any())
        <div>
            <ul>
                @foreach($erros->all() as $error)
                <li>{{$error}}<li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="edit-book-details">
        <form action="/item/edit/update/{{$item->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">@csrf      
            
            <div>
                <p>題名</p>
                <div><input class="form-control" type="text" name="title" value="{{$item->title}}" maxlength="100" required autofocus></div>
            </div>

            <div>
                <p>著者名</p>
                <div><input class="form-control" type="text" name="author" value="{{$item->author}}" maxlength="100" required></div>
            </div>

            <div>
                <p>出版社名</p>
                <div><input class="form-control" type="text" name="publisher" value="{{$item->publisher}}" maxlength="100" required></div>
            </div>

            <div>
                <p>ジャンル</p>
                <select class="form-control" name="genre" value="{{$item->genre}}" maxlength="100" required>
                    <option value ="趣味">趣味</option>
                    <option value ="コミック">コミック</option>
                    <option value ="プログラミング">プログラミング</option>
                    <option value ="料理">料理</option>
                    <option value ="旅行">旅行</option>
                </select>
            </div>

            <div>
                <p>本の紹介</p>
                <div> <input class="form-control" type="text" name="introduction" value="{{$item->introduction}}" maxlength="100" required></div>
            </div>
                
            <div>
                <p>画像のアップロード</p>
                <input class="form-control" type="file" name="image">
            </div>
            
            <div>
                <p>価格 (円)<p>
                <input class="form-control" name="price" type="number" value="{{$item->price}}" min="0" required>
            </div>

            <div>
                <p>在庫数 (冊)<p>
                <input class="form-control" name="inventory" type="number" value="{{$item->inventory}}" min="0" required>
            </div>
            <br>
            <button type="sumbit">更新する</button>
        </form>
        
    </div>

    </main>
<br>
</body>