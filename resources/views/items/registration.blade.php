@include('account.common')
<head>
<title>料理登録画面</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
     <a class="navbar-brand" href="/home">{{ $user->name }}さんの献立</a>
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
              <li class="nav-item">
                  <a class="nav-link" href="/item/registration">料理追加</a>
              </li>
              @if(session("is_admin")==1) 
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
<h2><i class="far fa-lightbulb"></i><span>料理登録画面</span></h2>

<div class="bg_test">


<div class="bg_test-text">

    <!-- 全てのエラーを一括表示する場合のコード -->
    <!-- @foreach ($errors->all() as $error)
    <div class="error-display"><li>{{ $error }}</li></div>
    @endforeach  -->

    <div class="registration-book-details">
        <form action="{{ url('item/registration')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf      
                <p>料理名</p>
                <input class="form-control" type="text" name="title" placeholder="料理名を20文字以内で記載して下さい。" maxlength="20" value="{{ old('tit') }}" required autofocus>
                <p>{{ $errors->first("title") }}</p>
                <p>ジャンル</p>
                <select class="form-control" name="genre" maxlength="20" required>
                    <option value ="" selected>以下から選択して下さい。</option>
                    <option value ="和食">和食</option>
                    <option value ="洋食">洋食</option>
                    <option value ="中華">中華</option>
                    <option value ="どんぶり">どんぶり</option>
                    <option value ="麺類">麺類</option>
                </select>
                <p>料理時間</p>
                <select class="form-control" name="time" maxlength="20" required>
                    <option value ="" selected>以下から選択して下さい。</option>
                    <option value ="10分">約10分</option>
                    <option value ="20分">約20分</option>
                    <option value ="30分">約30分</option>
                    <option value ="40分">約40分</option>
                    <option value ="50分">約50分</option>
                    <option value ="60分">約60分</option>
                </select>
                <p>料理の説明</p>
                <input class="form-control" type="text" name="introduction" placeholder="料理の説明を200文字以内で分かりやすく説明して下さい。" maxlength="200" required>
                <p>料理の主な材料（買い物リスト）</p>
                <input class="form-control" type="text" name="material" placeholder="料理の材料を200文字以内で分かりやすく説明して下さい。" maxlength="200" required>
                <p>材料費 (円)</p>
                <input class="form-control" type="number" name="price" placeholder="1以上の整数を半角で記載して下さい" min="1" required>
                <p>レシピサイト（URL）</p>
                <input class="form-control" type="text" name="recipe" placeholder="料理のレシピサイト（URL）を入力して下さい" maxlength="200" required>
                <p>画像のアップロード</p>
                <input class="form-control" type="file" name="image" accept="image/jpg, image/jpeg, image/png"> 
                <br>
                <button type="sumbit" class="btn btn-info">登録する</button>
        </form>
    </div>

</div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>