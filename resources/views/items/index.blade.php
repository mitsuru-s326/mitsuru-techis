@include('items.common')

<head>
    <title>料理一覧画面</title>
    <!-- <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script> -->
</head>

<body class="text-center">
    <h2>料理一覧（写真メイン）</h2>
<div class="bg_test-text">
  
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
            @if(session("is_admin")==1)
            <li><button type="sumbit"><a href="/item/edit/delete/{{$item->id}}">料理削除</a></button></li>
            @endif
          </div>

        </div>
      @endforeach 
    </div>

  

  <footer>
  <div>{{$items->links('pagination::bootstrap-4')}}</div>
  </footer>
  
</div>
  </form>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
