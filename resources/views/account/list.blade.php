@include('account.common')
<head>
    <title>アカウント一覧画面</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="/home">ホーム画面</a>
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

<div class="container">
<h2><i class="far fa-lightbulb"></i><span>アカウント一覧画面</span></h2>


<div class="bg_test">

<div class="bg_test-text">
  <div class="user_register">
      <a style=color:white; href="toroku" target="_blank">>>アカウント登録画面へ</a>
  </div>


<div class="table-responsive">

<table class="table table-hover">

  <thead class="list" style=color:black;>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>ニックネーム</th>
      <th>メールアドレス</th>
      <th>作成日</th>
      <th>編集</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr class="list">
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->nick_name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->created_at }}</td>
      <td><a style= color:black href="edit/{{ $user->id }}" target="_blank">編集</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
<br>
<!-- <ホーム画面へのボタン>     -->
<form action="/home" method="GET">
                    {{ csrf_field() }}
    <button type="submit" class="btn btn-Dark">ホーム画面</button>
  </form>
<!-- <アカウントログアウトボタン>     -->
<form action="/logout" method="GET">
                    {{ csrf_field() }}
    <button type="submit" class="btn btn-Dark">ログアウト</button>
  </form>
</div> 
      
</body>