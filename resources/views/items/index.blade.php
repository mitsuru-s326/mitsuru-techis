@include('items.common')

<head>
    <title>管理者用 商品一覧画面</title>
</head>

<body class="text-center">
    
  <header>
    <p><b>本画面はプログラミング学習用に作成されたものであり、実際の商品の販売を目的としたものではありません。</b></P><br>
    <h1>商品一覧画面（管理者用）</h1>
    <button class="w-200 btn btn-lg"><a href="/item/registration">商品新規登録画面へ</a></button>
    <button class="w-200 btn btn-lg"><a href="/item/home">ホーム画面へ戻る</a></button>
  </header>

  <br>

  <main>
    <div class="index-books">   
      @foreach($items as $item)
        <div class ="index-book-information">
        
          <div class="index-book-image">
            <img src="data:image/png;base64,{{$item->image}}" alt="image">
          </div>
          
          <div class="index-book-details">
            <li><b>題名：{{$item->title}}</b></li>
            <li>著者：{{$item->author}}</li>
            <li>出版社：{{$item->publisher}}</li>
            <li>ジャンル：{{$item->genre}}</li>
            <li><p>本の概要：{{$item->introduction}}</P></li>
            <li>現在の価格：{{number_format($item->price)}}円</li>
            <li>現在の在庫数：{{number_format($item->inventory)}}冊</li>
            <li><button type="sumbit"><a href="/item/edit/{{$item->id}}">商品編集画面へ</a></button></li>
            <li><button type="sumbit"><a href="/item/edit/delete/{{$item->id}}">商品削除</a></button></li>
          </div>

        </div>
      @endforeach 
    </div>
  </main>

  <br>

  
</body>
