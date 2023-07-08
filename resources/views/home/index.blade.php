@include('account.common')
<head>
    <title>ホーム画面</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="#">{{ $user->nick_name }}さんの献立</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="/search">献立一覧<span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/search">料理一覧</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/item">料理管理</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/list">アカウント一覧</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="/logout">ログアウト</a>
             </li>
         </ul>
     </div>
</nav>
            <h2>献立のホーム画面へようこそ<br>この献立システムは毎日の夕食メニューを管理するためのシステムです</h2>
            <br>     
            <h3>{{ $user->nick_name }}さんの献立</h3>
        

    
    <div class="header-left">
        <img class="header-logo" src="../../../../nabe.jpeg" alt="nabe">
    </div>

    <div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">〇月</th>
            <th scope="col">〇日</th>
            <th scope="col">料理名</th>
            <th scope="col">ジャンル</th>
            <th scope="col">料理時間</th>
            <th scope="col">作り方(URL)</th>
        </tr>
        </thead>
    <tbody>
            @foreach ($user->items as $item)
        <tr>
            <td>〇月</td>
            <td>〇日</td>
            <th scope="row"><a href="/search/detail/{{ $item->id }}">{{$item->title}}</a></th>
            <td>{{$item->genre}}</td>
            <td>{{$item->time}} </td>
            <td><a href="{{ $item->recipe }}" target="_blank">{{ $item->recipe }}</a></td>
        </tr> 
             @endforeach
            
        </tbody>
        </table>
        </form>
    </div>
    </div>
</div>
</body>
</html>
