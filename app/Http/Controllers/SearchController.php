<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Item;

class SearchController extends Controller

{
    //商品一覧・検索画面を表示する
    public function index(Request $request) {
        $user = User::find(session("id"));
        $keyword = $request->input('keyword');
        $query = Item::query();
        if(!empty($keyword)) {
            $query->where('status', 'active')->get();
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('genre', 'LIKE', "%{$keyword}%");
        }
        
        $sort = $request->input('sort');
        if(!empty($sort)) {
            if ($sort=='title_up'){
                $query->orderBy('title','ASC');
            }
            elseif($sort=='title_down'){
                $query->orderBy('title','DESC');
            }
            elseif($sort=='genre_up'){
                $query->orderBy('genre','ASC');
            }
            elseif($sort=='genre_down'){
                $query->orderBy('genre','DESC');
            }
            }

        $items = $query->where('status', 'active')->get();
        return view('search.index')->with('items', $items)->with('keyword', $keyword)->with('user' , $user);
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

