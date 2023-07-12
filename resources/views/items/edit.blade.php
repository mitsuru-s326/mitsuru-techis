@include('items.common')

<head>
    <title>料理編集・削除画面</title>
</head>

<body class="text-center">

<header>
    <h2>料理編集画面</h2>
</header> 

<br>

<main>
    <div class="edit-area">

        <div class="edit-book-side">
            <div class="edit-book-image">
                <p><b>料理番号 {{$item->id}} </b><p>
                <img src="data:image/png;base64,{{$item->image}}" alt="image">
            </div> 
        </div> 

        <div class="edit-book-details">
            <form action="/item/edit/update/{{$item->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf      
                <div>
                    <p>料理名</p>
                    <div><input class="form-control" type="text" name="title" value="{{$item->title}}" required autofocus></div>
                        @if($errors->has('title'))
                            @foreach($errors->get('title') as $message)
                                <div class="error-display">{{ $message }}</div>
                            @endforeach
                        @endif 
                </div>


                <div>
                    <p>ジャンル</p>
                    <select class="form-control" name="genre" value="{{$item->genre}}" maxlength="20" required>
                    <option value ="和食">和食</option>
                    <option value ="洋食">洋食</option>
                    <option value ="中華">中華</option>
                    <option value ="どんぶり">どんぶり</option>
                    <option value ="麺類">麺類</option>
                    </select>
                        @if($errors->has('genre'))
                            @foreach($errors->get('genre') as $message)
                            <div class ="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>

                <div>
                    <p>料理時間</p>
                    <select class="form-control" name="time" value="{{$item->genre}}" maxlength="20" required>
                    <option value ="10分">約10分</option>
                    <option value ="20分">約20分</option>
                    <option value ="30分">約30分</option>
                    <option value ="40分">約40分</option>
                    <option value ="50分">約50分</option>
                    <option value ="60分">約60分</option>
                    </select>
                        @if($errors->has('time'))
                            @foreach($errors->get('time') as $message)
                            <div class ="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>

                <div>
                    <p>料理の説明</p>
                    <p class="book-introduction"><input class="form-control" type="text" name="introduction" value="{{$item->introduction}}" maxlength="200" required></p>
                        @if($errors->has('introduction'))
                            @foreach($errors->get('introduction') as $message)
                            <div class ="error-display">{{ $message }}</div>
                            @endforeach
                        @endif
                </div>

                <div>
                    <p>料理の主な材料（買い物リスト）</p>
                    <p class="book-introduction"><input class="form-control" type="text" name="material" value="{{$item->material}}" maxlength="200" required></p>
                        @if($errors->has('introduction'))
                            @foreach($errors->get('introduction') as $message)
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
                    <p>料理のレシピサイト（URL）</p>
                    <p class="book-introduction"><input class="form-control" type="text" name="recipe" value="{{$item->recipe}}" maxlength="200" required></p>
                    @if($errors->has('recipe'))
                            @foreach($errors->get('recipe') as $message)
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
            
                <button type="sumbit">更新する</button>
            </form>     
        </div>

    </div>

</main>
<br>
</body>