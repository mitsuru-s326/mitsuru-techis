@extends('search.app')

<h1>一覧画面</h1>

<!-- 検索機能 -->
<div class="serch">
    <form action="{{ url('/search') }}" method="GET">
        @csrf
        <input type="text" name="keyword" value="{{$keyword}}">
        <input type="submit" value="検索">
    </form>
</div>

<div>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<?php if(strstr($url,'keyword')): ?>
    検索結果<a href="/search">全件表示に戻る</a>
<?php else: ?>
    全件表示
<?php endif; ?>
</div>

<table>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <th>{{$item->id}}</th>
            <td><a href="/search/detail/{{ $item->id }}">{{$item->title}}</a></td>
            <td>著書：{{$item->author}}</td>
            <td>出版社：{{$item->publisher}}</td>
            <td>ジャンル：{{$item->genre}}</td>
            <td>{{$item->introduction}}</td>
            <!-- <td><img src="{{$item->image}}"></td> -->
            <td>{{$item->price}}</td>
            <td>{{$item->inventory}}</td>
        </tr>
        @endforeach
    </tbody>
</table>