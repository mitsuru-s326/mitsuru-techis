@include('account.common')
<head>
    <title>料理の詳細</title>
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

    <div class="header">
        <h2>料理の詳細</h2>
    </div>

    <!-- 詳細画面 -->
<div class="bg_test">

    <div class="bg_test-text">

    <div class="detail-list">
        <table>
            <tbody>
                <tr>
                    <td class="image">
                    @if(is_null($item->image))
                        <img src="../../../../gazounashi.jpeg" alt="image">
                    @else 
                        <img src="data:image/png;base64,{{$item->image}}">
                    @endif
                    </td>
                    <td>
                        <li class="title">料理名：{{$item->title}}</li>
                        <br>
                        <li>
                            ジャンル：{{$item->genre}}
                        </li>
                        <li>
                            料理時間：{{$item->time}}
                        </li>
                        <li>
                            作り方：<a href="{{ $item->recipe }}">作り方WEBサイトへ</a>
                        </li>
                        <li>
                            主な材料：{{$item->material}}
                        <li>
                            材料費：{{$item->price}}円
                        </li>
                        <li class="introduction">
                            料理の説明：
                            <hr>
                            {{$item->introduction}}
                        </li>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
<!-- <li><b>料理名：{{$item->title}}</b></li>
<li>ジャンル：{{$item->genre}}</li>
<li>料理時間：{{$item->time}}</li>
<li><p>料理の説明：{{$item->introduction}}</P></li>
<li><p>料理の主な材料：{{$item->material}}</P></li>
<li>材料費：{{number_format($item->price)}}円</li> -->