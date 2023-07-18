@include('account.common')
<head>
    <title>アカウント一覧画面</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="/home">{{ $name }}さんの献立</a>
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
              @if(session("is_admin")==1) 
              <li class="nav-item">
                  <a class="nav-link" href="/item/registration">料理追加</a>
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
    <button type="submit" class="btn btn-info">ホーム画面</button>
  </form>
<!-- <アカウントログアウトボタン>     -->
<form action="/logout" method="GET">
                    {{ csrf_field() }}
    <button type="submit" class="btn btn-info">ログアウト</button>
  </form>
</div> 

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
</body>