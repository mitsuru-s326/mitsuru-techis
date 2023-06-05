<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //商品一覧・検索画面を表示する
    public function index() {
        return view('search.index');
    }
}
