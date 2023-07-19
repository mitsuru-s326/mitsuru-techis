@include('account.common')
<head>
    <title>料理一覧画面</title>
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="/home">{{ $user->name }}さんの献立</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="/search">料理一覧<span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/item">料理一覧（写真）</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/item/registration">料理追加</a>
              </li>
              @if(session("is_admin")==1) 
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
<h2>料理一覧画面</h2>


<!-- 検索機能 -->
<div class = list>
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
</div>

<!-- 一覧表示・検索結果表示 -->
<div class="list-form">
    <div>
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <?php if (strstr($url, 'keyword')) : ?>
        検索結果表示　　<a href="/search">全件表示に戻る</a>
    <?php else : ?>
        全件表示
    <?php endif; ?>
    <hr>
    </div>

<div class="bg_test">


<div class="bg_test-text">

    <form action="{{url('menu')}}" method="POST" class="" >
        {{ csrf_field() }}
       
    <table id= "sort_table" class="table">
        <thead>
        <tr>
            <th scope="col">料理名<a href="{{ url('/search?sort=title_up') }}">↑</a> &nbsp<a href="{{ url('/search?sort=title_down') }}">↓</a></th>
            <th scope="col">ジャンル<a href="{{ url('/search?sort=genre_up') }}">↑</a> &nbsp<a href="{{ url('/search?sort=genre_down') }}">↓</a></th>
            <th scope="col">料理時間</th>
            <th scope="col">作り方</th>
            @if(session("is_admin")==1) 
            <th scope="col">料理編集</th>
            <th scope="col">料理削除</th>
            @endif
            <th scope="col">献立へ登録</th>
        </tr>
        </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <th scope="row"><a href="/search/detail/{{ $item->id }}">{{$item->title}}</a></th>
            <td>{{$item->genre}}</td>
            <td>{{$item->time}} </td>
            <td><a href="{{ $item->recipe }}">作り方へ</a></td>
            @if(session("is_admin")==1) 
            <td><a href="/item/edit/{{$item->id}}">編集</a></td>
            <td><a href="/item/edit/delete/{{$item->id}}">削除</a></td>
            @endif
            <td><button type="submit" name="item_id" value="{{$item->id}}"  class= index-seach>
            @if($user->items->contains($item->id))
            <div class="botton-dele"> 献立から削除</div>
            @else
            <div class="botton-regi"> 献立へ登録</div>
            @endif
            </button><td>
        </tr> 
        @endforeach
            
        </tbody>
        </table>
        </form>
    </div>
</div>

</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
<!-- <script>
let table = new Tabulator('#sort_table', {});    
</script> -->