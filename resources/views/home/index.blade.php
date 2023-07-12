@include('account.common')
<head>
    <title>ホーム画面</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="#">{{ $user->name }}さんの献立</a>
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
            
            <h2>献立のホーム画面へようこそ<br>この献立システムは毎日の夕食メニューを管理するためのシステムです</h2>
            <br>     
            <h3>{{ $user->nick_name }}さんの献立</h3>

    <div class="container">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">日にち</th>
            <th scope="col"></th>
            <th scope="col">料理名</th>
            <th scope="col">ジャンル</th>
            <th scope="col">料理時間</th>
            <th scope="col">作り方(URL)</th>
        </tr>
        </thead>
    <tbody>
            @foreach ($user->items as $item)
            <form action="{{url('day')}}" method="POST" class="" >
            {{ csrf_field() }}
        <tr>
            <input type="hidden" name="itemId" value="{{ $item->id }}">
            <td><input type="date" name="date" value="{{App\Models\Item_User::where('user_id',$user->id)->where('item_id',$item->id)->get()->first()->date}}"></td>
            <td><button type="sumbit">日付更新</button></td>
            <th scope="row"><a href="/search/detail/{{ $item->id }}">{{$item->title}}</a></th>
            <td>{{$item->genre}}</td>
            <td>{{$item->time}} </td>
            <td><a href="{{ $item->recipe }}" target="_blank">作り方へ</a></td>
        </tr>
            </form> 
             @endforeach
            
        </tbody>
        </table>
       
        
    </div>
    </div>
</div>
</body>
</html>
