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
                    <td class="image"><img src="{{$item->image}}"></td>
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