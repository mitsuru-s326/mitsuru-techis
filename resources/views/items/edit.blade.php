@include('account.common')

<head>
    <title>料理編集・削除画面</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="/home">献立一覧へ</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="/search">料理一覧<span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/item/registration">料理追加</a>
              </li>
              @if(session("is_admin")==1) 
              <li class="nav-item">
                  <a class="nav-link" href="/item">写真一覧</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/list">アカウント一覧</a>
              </li>
              @endif
              <li class="nav-item">
              <a class="nav-link" href="/logout">ログアウト</a>
             </li>
         </ul>
     </div>
</nav>

<div class="container">
<h2><i class="far fa-lightbulb"></i><span>料理編集画面</span></h2>

<div class="bg_test">


<div class="bg_test-text">
    <div class=list>
        <h3>料理名 {{$item->title}} </h3>
        <br>
        <img src="data:image/png;base64,{{$item->image}}" alt="image">
    </div>
    <br>
    
    <form action="/item/edit/update/{{$item->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    @csrf      

        <p>料理名</p>
<input class="form-control" type="text" name="title" value="{{$item->title}}" required autofocus>
    @if($errors->has('title'))
    @foreach($errors->get('title') as $message)
        <div class="error-display">{{ $message }}</div>
    @endforeach
    @endif 


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
    
    <br>

    <button type="sumbit" class="btn btn-info">更新する</button>
    </form>     
    

</div>
</div>


</body>