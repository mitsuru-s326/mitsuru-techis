@include('account.common')
<head>
    <title>ホーム画面</title>
</head>
<body>
<div class="container">
            <h2>献立のホーム画面へようこそ<br>この献立システムは毎日の夕食メニューを管理するためのシステムです</h2>     
            <div class="form-group">
                <a class="btn btn-success" href="/logout">ログアウト</a>
            </div>
            
        

    <div class="main-wrapper">
    <div class="content-wrapper">
    <h4>{{ $user->nick_name }}さんの献立</h4>
    @foreach ($user->items as $item)
    <h4>{{ $item->title}}</h4>
    <h4>{{ $item->recipe}}</h4>
    @endforeach

    
</div>
        <div class="btn-wrapper">
            <li class="list-1">
                    <a class="button" href="/search">献立一覧</a>
                 </li>
                <li class="list-1">
                    <a class="button" href="/search">料理一覧</a>
                 </li>
                @if(session("is_admin")==1) 
                <li class="list-1">
                    <a class="button" href="/item">料理管理</a>
                </li>
                <li class="list-1">
                     <a class="button" href="/list">アカウント一覧</a>
                </li>
                @endif
        </div>
        </div>
    </div>
</body>
</html>
