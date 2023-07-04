@extends('search.app')

<div class="container">

    <div class="header">
        <h1 class="text-center">詳細画面</h1>
    </div>

    <!-- 詳細画面 -->

    <div class="detail-list">
        <table>
            <tbody>
                <tr>
                    <td class="image"><img src="data:image/png;base64,{{$item->image}}"></td>
                    <td>
                        <li class="title">{{$item->title}}</li>
                        <br>
                        <li>
                            著者　　：{{$item->author}}
                        </li>
                        <li>
                            出版社　：{{$item->publisher}}
                        </li>
                        <li>
                            ジャンル　：{{$item->genre}}
                        </li>
                        <br>
                        <li>
                            価格：{{$item->price}}円　/　在庫数：{{$item->inventory}}冊
                        </li>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="introduction">
                        <li class="introduction">
                            概要
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