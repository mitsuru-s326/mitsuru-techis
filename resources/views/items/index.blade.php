@include('items.common')

<head>
    <title>料理一覧画面</title>
</head>

<body class="text-center">
    
  <header>
    <h1>料理管理画面（管理者用一覧）</h1>
    <div>
      <button class="w-200 btn btn-lg"><a href="/item/registration">料理登録画面へ</a></button>
      <button class="w-200 btn btn-lg"><a href="/home">ホーム画面へ戻る</a></button>
    </div>
  </header>

  <br>

  <main>
    <div class="index-books">   
      @foreach($items as $item)
        <div class ="index-book-information">
        
          <div class="index-book-image">
          @if(is_null($item->image))
          <img src="../../../../gazounashi.jpeg" alt="image">
          @else 
            <img src="data:image/png;base64,{{$item->image}}" alt="image">
          @endif
          </div>
          
          <div class="index-book-details">
            <li><b>料理名：{{$item->title}}</b></li>
            <li>ジャンル：{{$item->genre}}</li>
            <li>料理時間：{{$item->time}}</li>
            <li><p>料理の説明：{{$item->introduction}}</P></li>
            <li><p>料理のレシピ：<a href="{{ $item->recipe }}">{{ $item->recipe }}</a></P></li>
            <!-- <li><p>料理の主な材料：{{$item->material}}</P></li>
            <li>材料費：{{number_format($item->price)}}円</li> -->
            <li><button type="sumbit"><a href="/item/edit/{{$item->id}}">料理編集画面へ</a></button></li>
            <li><button type="sumbit"><a href="/item/edit/delete/{{$item->id}}">料理削除</a></button></li>
          </div>

        </div>
      @endforeach 
    </div>

  </main>

  <footer>
  <div>{{$items->links('pagination::bootstrap-4')}}</div>
  </footer>
  
  <br>

</body>
