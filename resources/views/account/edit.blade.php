@include('account.common')
<head>
    <title>アカウント編集画面</title>
</head>


<body class="container">
<h2><i class="far fa-lightbulb"></i><span>アカウント編集画面</span></h2>


<div class="bg_test">


<div class="bg_test-text">
  <div class=list>
  <h4> ニックネーム٩(ˊᗜˋ*)و     {{$user ->nick_name}} </h4>
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
            <div class=lavelColor>パスワード</div>
            <div class=sukima></div> 
                <input type="text" name="email" class="form-control" class="justify-content-center" placeholder="メールアドレス" value="{{ $user ->email}}">
                <p>{{ $errors->first("email") }}</p>
            <div class=lavelColor>パスワード確認</div>
            <div class=sukima></div> 
                <input type="text" name="email_confirmation" class="form-control" class="justify-content-center" placeholder="メールアドレス確認用" value="{{ $user ->email}}">
                <p></p>
                
             </div>

        <!-- タスク変更ボタン -->
        <div class="form-group">
            <button type="submit" class="btn btn-success">アカウント情報変更</button>
        </div>       
    </form>

        <!-- <タスク削除ボタン>     -->
<form action="{{url('AccountDestroy')}}" method="POST">
        {{ csrf_field() }}

<div>
    <input type="hidden" name="id" value="{{$user ->id}}">
    <button type="submit" class="btn btn-success">アカウント情報削除</button>
</div>

</form>
</body>


