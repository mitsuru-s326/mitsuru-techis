@extends('search.app')

<h1>詳細画面</h1>

<div class="detail-list">
<table>
<tbody>
<tr>
    <th>{{$item->id}}</th>
    <td>{{$item->title}}</td>
    <td>{{$item->author}}</td>
    <td>{{$item->publisher}}</td>
    <td>{{$item->genre}}</td>
    <td>{{$item->introduction}}</td>
    <td><img src="{{$item->image}}"></td>
    <td>{{$item->price}}</td>
    <td>{{$item->inventory}}</td>
</tr>
</tbody>
</table>
</div>