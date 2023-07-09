@include('account.common')

<head>
    <title>献立一覧</title>
</head>

<body>

<h2>アカウントの献立一覧</h2>
        

    
    <div class="header-left">
        <img class="header-logo" src="../../../../nabe.jpeg" alt="nabe">
    </div>

    <div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">〇月</th>
            <th scope="col">〇日</th>
            <th scope="col">料理名</th>
            <th scope="col">ジャンル</th>
            <th scope="col">料理時間</th>
            <th scope="col">作り方(URL)</th>
        </tr>
        </thead>
    <tbody>
            @foreach ($user->items as $item)
        <tr>
            <td>〇月</td>
            <td>〇日</td>
            <th scope="row"><a href="/search/detail/{{ $item->id }}">{{$item->title}}</a></th>
            <td>{{$item->genre}}</td>
            <td>{{$item->time}} </td>
            <td><a href="{{ $item->recipe }}" target="_blank">{{ $item->recipe }}</a></td>
        </tr> 
             @endforeach
            
        </tbody>
        </table>
        </form>
    </div>
    </div>
</div>
</body>
</html>