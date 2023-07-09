@include('account.common')
<head>
    <title>料理編集・削除画面</title>
</head>

<div class="container">

    <div class="header">
        <h2>料理の詳細</h2>
    </div>

    <div class="list">
        <a class="btn btn-outline-secondary" href="/home">ホーム画面に戻る</a>
    </div>

    <div class="list">
        <a class="btn btn-outline-secondary" href="/search">料理一覧画面に戻る</a>
    </div>

    

    <!-- 詳細画面 -->

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
                            料理時間：{{$item->time}}分
                        </li>
                        <li>
                            作り方：<a href="{{ $item->recipe }}">作り方のURLページへ</a>
                        </li>
                        <li>
                            主な材料：{{$item->material}}
                        <li>
                            材料費：{{$item->price}}円
                        </li>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="introduction">
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

<!-- <li><b>料理名：{{$item->title}}</b></li>
<li>ジャンル：{{$item->genre}}</li>
<li>料理時間：{{$item->time}}</li>
<li><p>料理の説明：{{$item->introduction}}</P></li>
<li><p>料理の主な材料：{{$item->material}}</P></li>
<li>材料費：{{number_format($item->price)}}円</li> -->