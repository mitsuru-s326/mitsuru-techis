@include('account.common')
<head>
    <title>料理一覧画面</title>
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>
</head>

<div class="container">
<h2>料理一覧画面</h2>
<div class="list">
<a class="btn btn-outline-secondary" href="/home">ホーム画面に戻る</a>
</div>

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

    <form action="{{url('menu')}}" method="POST" class="" >
        {{ csrf_field() }}
       
    <table id= "sort_table" class="table">
        <thead>
        <tr>
            <th scope="col">料理名<a href="{{ url('/search?sort=title_up') }}">↑</a> &nbsp<a href="{{ url('/search?sort=title_down') }}">↓</a></th>
            <th scope="col">ジャンル<a href="{{ url('/search?sort=genre_up') }}">↑</a> &nbsp<a href="{{ url('/search?sort=genre_down') }}">↓</a></th>
            <th scope="col">料理時間</th>
            <th scope="col">作り方</th>
            <th scope="col">登録者</th>
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
            <td>{{$item->time}} 分</td>
            <td><a href="{{ $item->recipe }}">作り方へ</a></td>
            <td>{{$item->user}} </td>
            @if(session("is_admin")==1) 
            <td><a href="/item/edit/{{$item->id}}">編集</a></td>
            <td><a href="/item/edit/delete/{{$item->id}}">削除</a></td>
            @endif
            <td><button type="submit" name="item_id" value="{{$item->id}}" >
            @if($user->items->contains($item->id))
            <a style= background:red > 献立から削除</a>
            @else
            <a style= background:yellow > 献立へ登録</a>
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
<!-- <script>
let table = new Tabulator('#sort_table', {});    
</script> -->