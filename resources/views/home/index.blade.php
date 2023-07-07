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
<div class="container">
            <h2>献立のホーム画面へようこそ<br>この献立システムは毎日の夕食メニューを管理するためのシステムです<br>
            @foreach ($user->items as $item)
    {{ $item->title}}
    {{ $item->recipe}}
    @endforeach
    
    
</h2>     
            
        

    
    <div class="header-left">
        <img class="header-logo" src="../../../../nabe.jpeg" alt="nabe">
    </div>
    
    @foreach ($user->items as $item)
    {{ $item->title}}
    {{ $item->recipe}}
    @endforeach
</body>
</html>
