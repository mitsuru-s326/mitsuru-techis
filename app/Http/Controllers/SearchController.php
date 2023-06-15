<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class SearchController extends Controller

{
    //商品一覧・検索画面を表示する
    public function index(Request $request) {
        $keyword = $request->input('keyword');
        $query = Item::query();
        if(!empty($keyword)) {
            $query->where('status', 'active')->get();
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('author', 'LIKE', "%{$keyword}%");
        }
        $items = $query->where('status', 'active')->get();
        return view('search.index')->with('items', $items)->with('keyword', $keyword);
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

