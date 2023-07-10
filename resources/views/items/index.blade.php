@include('items.common')

<head>
    <title>料理一覧画面</title>
    <!-- <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script> -->
</head>

<body class="text-center">
  <header>
    <h2>料理管理画面（管理者用一覧）</h2>
    <div>
      <button class="w-200 btn btn-lg"><a href="/item/registration">料理登録画面へ</a></button>
      <button class="w-200 btn btn-lg"><a href="/home">ホーム画面へ戻る</a></button>
    </div>
  </header>
  <br>

  <!-- 検索機能 -->
<!-- <div class = list>
<div class="search-form">
    <form class="row g-2" action="{{ url('/search') }}" method="GET">
        @csrf
        <div class="col-auto">
        <input class="form-control" type="text" name="keyword" value="{{$keyword}}">
        </div>
        <div class="col-auto">
        <input class="btn btn-Dark" type="submit" value="検索">
        </div>
    </form>
</div>
</div> -->

<!-- 一覧表示・検索結果表示 -->
<!-- <div class="list-form">
    <div>
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <?php if (strstr($url, 'keyword')) : ?>
        検索結果表示 <a href="/search">全件表示に戻る</a>
    <?php else : ?>
        全件表示
    <?php endif; ?>
    <hr>
    </div> -->
  
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
            <li><p>料理のレシピ：<a href="{{ $item->recipe }}">作り方へ</a></p></li>
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
