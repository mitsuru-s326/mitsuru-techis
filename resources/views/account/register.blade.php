@include('account.common')
<head>
<div>
    <title>アカウント登録画面</title>
</div>
</head>

<body class="container">

<h2><i class="far fa-lightbulb"></i><span>アカウント登録画面</span></h2>


<div class="bg_test">
    
<!-- ログイン画面に遷移するボタン -->
<div class="user_register">
      <a style= color:aliceblue  style= font-weight:400 href="/" target="_blank">>> ログイン画面へ</a>
</div>
<!-- <button type="submit" class="btn btn-success" onclick="location.href='/'">ユーザーの登録</button> -->


<!-- ユーザー登録用パネル… -->
<div class="panel-body">
   

    <!-- 新タスクフォーム -->
    <form action="{{url('UserRegister')}}" method="POST" class="form-horizontal" >
        {{ csrf_field() }}

        
        <!-- タスク名 バリデーションでメールとパスワードにはconfirmationを入れている -->

<!-- 背景の四角 -->
<div class="bg_test-text">
    


        <div class="mb-3 row">
                    <div class=lavelColor>名前</div>
                    <div class=sukima></div>
                        <input type="text" name="name" class="form-control" class="justify-content-center" placeholder="名前" value="{{ old('name') }}">
                        <p>{{ $errors->first("name") }}</p>
                    <div class=lavelColor><label>ニックネーム</label></div>
                    <div class=sukima></div>
                        <input type="text" name="nick_name" class="form-control" class="justify-content-center" placeholder="ニックネーム" value="{{ old('nick_name') }}">
                        <p>{{ $errors->first("nick_name") }}</p>
                    <div class=lavelColor><label>メールアドレス</label></div>
                    <div class=sukima></div>    
                        <input type="text" name="email" class="form-control" class="justify-content-center" placeholder="メールアドレス" value="{{ old('email') }}">
                        <p>{{ $errors->first("email") }}</p>
                    <div class=lavelColor><label>メールアドレス確認用</label></div>
                    <div class=sukima></div>
                        <input type="text" name="email_confirmation" class="form-control" class="justify-content-center" placeholder="メールアドレス確認用" value="{{ old('email') }}">
                        <p></p>
                    <div class=lavelColor><label>パスワード</label></div>
                    <div class=sukima></div>    
                        <input type="password" name="password" class="form-control" class="justify-content-center" placeholder="パスワード">
                        <p>{{ $errors->first("password") }}</p>
                    <div class=lavelColor><label>パスワード確認用</label></div>
                    <div class=sukima></div>
                        <input type="password" name="password_confirmation" class="form-control" class="justify-content-center" placeholder="パスワード確認用">
                        <p></p>
        </div>

        <!-- ユーザー追加ボタン -->
        <div class="form-group">
                <button type="submit" class="btn btn-info" onclick="location.href='login'">アカウント登録</button>
        </div>
       
    </form>
</div>
</div>
</div>
</body>