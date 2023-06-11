@include('account.common')

<head>

    <title>ログイン画面</title>

</head>

<body class="container">


<h2><i class="far fa-lightbulb"></i><span>ログイン画面</span></h2>

<div class="bg_test">

<!-- ログイン用パネル… -->
<div class="panel-body">
  
 

    <!-- ログイン認証フォーム -->
    <form action='/auth' method="post" class="form-horizontal">
        {{ csrf_field() }}

        
        <!-- ログイン画面 -->
<!-- 背景の黒の四角 -->
<div class="bg_test-text">
<div class="user_register">
      <a style= color:aliceblue  style= font-weight:400 href="toroku" target="_blank">>>アカウント登録画面へ</a>
</div>
<br>
<div class="mb-3 row">
            <div class=lavelColor><div class=text1>メールアドレス入力</div></div>
            <div class=sukima></div>   
                <input type="text" name="email" class="form-control" class="justify-content-center" placeholder="メールアドレス" >
            <div class=lavelColor><div class=text1>パスワード入力</div></div>
            <div class=sukima></div>   
                <input type="text" name="password" class="form-control" class="justify-content-center" placeholder="パスワード" >
                
                @if ($errors->any())
                <p class="error-message" style= color:green>入力内容をご確認ください。</p>
                @endif

        <!-- ログインボタン -->
        <div class="form-group">
        <br>
                <button type="submit" class="btn btn-success">ログイン</button>
        </div>
       </form>
    <p>{{ session("message") }}</p>

</div>
</div>
</div> 
</div>
</body>