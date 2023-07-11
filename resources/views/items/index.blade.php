@include('items.common')

<head>
    <title>料理一覧画面</title>
    <!-- <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script> -->
</head>

<body class="text-center">
    <h2>料理一覧（写真メイン）</h2>

  <!-- 検索機能 -->
<!-- <div class = >
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
<!-- <div class="">
    <div>
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <?php if (strstr($url, 'keyword')) : ?>
        検索結果表示 <a href="/search">全件表示に戻る</a>
    <?php else : ?>
        全件表示
    <?php endif; ?>
    <hr>
    </div> -->

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
            <li><p>ジャンル：{{$item->genre}}</p></li>
            <li><p>料理時間：{{$item->time}}</p></li>
            <li><p>料理の説明：{{$item->introduction}}</p></li>
            <li><p>料理のレシピ：<a href="{{ $item->recipe }}">作り方へ</a></p></li>
            <li><p>料理の主な材料：{{$item->material}}</p></li>
            <li><p>材料費：{{number_format($item->price)}}円</p></li>

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
  </form>
</body>
