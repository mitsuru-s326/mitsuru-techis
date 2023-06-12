@extends('search.app')

<div class="container">

<h1 class="text-center">一覧画面</h1>

<!-- 検索機能 -->
<div class="search-form">
    <form class="row g-2" action="{{ url('/search') }}" method="GET">
        @csrf
        <div class="col-auto">
        <input class="form-control" type="text" name="keyword" value="{{$keyword}}">
        </div>
        <div class="col-auto">
        <input class="btn btn-success" type="submit" value="検索">
        </div>
    </form>
</div>

<!-- 一覧表示・検索結果表示 -->
<div class="list-form">
    <div>
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <?php if (strstr($url, 'keyword')) : ?>
        検索結果<a href="/search">全件表示に戻る</a>
    <?php else : ?>
        全件表示
    <?php endif; ?>
    <hr>
    </div>

    <div class="all-list">
        <table class="table">
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td class="image"><img src="{{$item->image}}"></td>
                    <td><a href="/search/detail/{{ $item->id }}">{{$item->title}}</a></td>
                    <td>著書：{{$item->author}}</td>
                    <td>出版社：{{$item->publisher}}</td>
                    <td>ジャンル：{{$item->genre}}</td>
                    <td>{{$item->introduction}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->inventory}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>