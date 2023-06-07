@extends('search.app')

<h1>詳細画面</h1>

<table>
<tbody>
<tr>
    <th>{{$item->id}}</th>
    <td>{{$item->title}}</td>
    <td>{{$item->author}}</td>
    <td>{{$item->publisher}}</td>
    <td>{{$item->genre}}</td>
    <td>{{$item->introduction}}</td>
    <td>{{$item->image}}</td>
    <td>{{$item->price}}</td>
    <td>{{$item->inventory}}</td>
</tr>
</tbody>
</table>