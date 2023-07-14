@include('account.common')
<head>
    <title>アカウント編集画面</title>
    </head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="/home">献立一覧へ</a>
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
<h2><i class="far fa-lightbulb"></i><span>アカウント編集画面</span></h2>

<div class="bg_test">


<div class="bg_test-text">
  <div class=list>
  <h4> ようこそ！  {{$user ->nick_name}} さん</h4>
  </div>  
  <form action="{{url('AccountEdit')}}" method="POST"  class="form-horizontal" >
        {{ csrf_field() }}
    <!-- IDを表示せずに取得して一覧を取得 -->
    <input type="hidden" name="id" value="{{$user ->id}}">

    <!-- メールアドレス、パスワード ISadminなどを表示せずに取得 -->
    
    <input type="hidden" name="password" class="form-control" class="justify-content-center" placeholder="パスワード" value="{{$user ->password}}">
    <input type="hidden" name="password_confirmation" class="form-control" class="justify-content-center" placeholder="パスワード確認用" value="{{$user ->password}}">
    <input type="hidden" name="is_admin"  value="{{$user ->is_admin}}">
        
        <!-- 編集画面に名前などの情報をもってくる -->

            <div class="box">
            <div class=lavelColor>アカウント名</div>
            <div class=sukima></div>
                <input type="text" name="name" class="form-control" class="justify-content-center" placeholder="名前" value="{{$user ->name}}">
                <p>{{ $errors->first("name") }}</p>
            <div class=lavelColor>ニックネーム</div>
            <div class=sukima></div>    
                <input type="text" name="nick_name" class="form-control" class="justify-content-center" placeholder="ニックネーム" value="{{$user ->nick_name}}">
                <p>{{ $errors->first("nick_name") }}</p>
            <div class=lavelColor>メールアドレス</div>
            <div class=sukima></div> 
                <input type="text" name="email" class="form-control" class="justify-content-center" placeholder="メールアドレス" value="{{ $user ->email}}">
                <p>{{ $errors->first("email") }}</p>
            <div class=lavelColor>メールアドレス確認</div>
            <div class=sukima></div> 
                <input type="text" name="email_confirmation" class="form-control" class="justify-content-center" placeholder="メールアドレス確認用" value="{{ $user ->email}}">
                <p></p>
                
             </div>

        <!-- アカウント変更ボタン -->
        <div class="form-group">
            <button type="submit" class="btn btn-info">アカウント情報変更</button>
        </div>       
    </form>

        <!-- <アカウント削除ボタン>     -->
<form action="{{url('AccountDestroy')}}" method="POST">
        {{ csrf_field() }}

<div>
    <input type="hidden" name="id" value="{{$user ->id}}">
    <button type="submit" class="btn btn-info">アカウント情報削除</button>
</div>

</form>



</body>


