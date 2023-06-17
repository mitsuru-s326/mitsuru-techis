@include('items.common')

<head>
    <title>商品編集・削除画面</title>
</head>

<body class="text-center">

<header>
    <p><b>本画面はプログラミング学習用に作成されたものであり、実際の商品の販売を目的としたものではありません。</b></P><br>
    <h1>商品編集画面</h1>
    <button class="w-200 btn btn-lg"><a href="/item">商品一覧画面へ戻る</a></button>
</header> 

<br>

<main>
    <div class="edit-area">

        <div class="edit-book-side">
            <div class="edit-book-image">
                <p><b>商品番号 {{$item->id}} </b><p>
                <img src="data:image/png;base64,{{$item->image}}" alt="image">
            </div> 
        </div> 

        <div class="edit-book-details">
            <form action="/item/edit/update/{{$item->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">@csrf      
        
                <div>
                    <p>題名</p>
                    <div><input class="form-control" type="text" name="title" value="{{$item->title}}" required autofocus></div>
                        @if($errors->has('title'))
                            @foreach($errors->get('title') as $message)
                                <div class="error-display">{{ $message }}</div>
                            @endforeach
                        @endif 
                </div>

                <div>
                    <p>著者名</p>
                    <div><input class="form-control" type="text" name="author" value="{{$item->author}}" required></div>
                        @if($errors->has('author'))
                            @foreach($errors->get('author') as $message)
                            <div class="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>

                <div>
                    <p>出版社名</p>
                    <div><input class="form-control" type="text" name="publisher" value="{{$item->publisher}}" required></div>
                        @if($errors->has('publisher'))
                            @foreach($errors->get('publisher') as $message)
                            <div class ="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>

                <div>
                    <p>ジャンル</p>
                    <select class="form-control" name="genre" value="{{$item->genre}}" maxlength="20" required>
                        <option value ="趣味">趣味</option>
                        <option value ="コミック">コミック</option>
                        <option value ="プログラミング">プログラミング</option>
                        <option value ="料理">料理</option>
                        <option value ="旅行">旅行</option>
                    </select>
                        @if($errors->has('genre'))
                            @foreach($errors->get('genre') as $message)
                            <div class ="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>

                <div>
                    <p>本の紹介</p>
                    <p class="book-introduction"><input class="form-control" type="text" name="introduction" value="{{$item->introduction}}" maxlength="200" required></p>
                        @if($errors->has('introduction'))
                            @foreach($errors->get('introduction') as $message)
                            <div class ="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>
                    
                <div>
                    <p>画像のアップロード</p>
                    <input class="form-control" type="file" name="image" accept="image/jpg, image/jpeg, image/png">
                        @if($errors->has('image'))
                            @foreach($errors->get('image') as $message)
                            <div class ="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>
                
                <div>
                    <p>価格 (円)</p>
                    <input class="form-control" name="price" type="number" value="{{$item->price}}" min="1" required>
                    @if($errors->has('price'))
                        @foreach($errors->get('price') as $message)
                        <div class ="error-display">{{ $message }}</div>
                        @endforeach
                    @endif
                </div>

                <div>
                    <p>在庫数 (冊)</p>
                    <input class="form-control" name="inventory" type="number" value="{{$item->inventory}}" min="0" required>
                    @if($errors->has('inventory'))
                        @foreach($errors->get('inventory') as $message)
                        <div class ="error-display">{{ $message }}</div>
                        @endforeach
                    @endif
                </div>
            
                <button type="sumbit">更新する</button>
            </form>     
        </div>

    </div>

</main>
<br>
</body>