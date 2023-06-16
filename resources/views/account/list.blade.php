@include('account.common')
<head>
    <title>アカウント一覧画面</title>
</head>


<body class="container">
<h2><i class="far fa-lightbulb"></i><span>アカウント一覧画面</span></h2>


<div class="bg_test">

<div class="bg_test-text">
  <div class="user_register">
      <a style=color:white;  style= font-weight:400 href="toroku" target="_blank">>>アカウント登録画面へ</a>
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
      <td class="list"><a style= color:green href="edit/{{ $user->id }}" target="_blank">編集</a></td>
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
    <button type="submit" class="btn btn-success">ホーム画面</button>
  </form>
<!-- <アカウントログアウトボタン>     -->
<form action="/logout" method="POST">
                    {{ csrf_field() }}
    <button type="submit" class="btn btn-success">ログアウト</button>
  </form>
</div> 
      
</body>