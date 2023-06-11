<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class SearchController extends Controller
{
    //商品一覧・検索画面を表示する
    public function index() {
        //$items = Item::get();
        $items = Item::where('status', 'active')->get();
        return view('search.index')->with('items', $items);
    }

    //登録商品の詳細画面を表示する
    public function detail($id) {
        //すべてのデータを取得する
        //$items = Item::all();
        //idをDBから取得する
        $item = Item::findOrfail($id);
        //詳細画面を表示させる
        return view('search.detail', ['item'=>$item]);
    }
}
