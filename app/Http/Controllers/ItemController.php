<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
    public function GetIndex(Request $request)
    {
        // 商品一覧を取得する関数
        // $items = Item::orderBY('created_at', 'asc')->get();

        // // return view('items.index', [
        // // 'items' => $items,
        // ]);
        
        return view('items.index');
    }
  
    public function GetUpdateItem(Request $request)
    {
        // 編集対象の本に関する情報を取得する関数
        // $item = Item:: find($id);

        return view('items.edit');
       
    }

    public function DeleteItem(Request $request, $id)
    {
        // 編集対象の本の情報を削除する関数
        // $item = item:: find($id);
        // $item->delete();
        return view('items.index');
    }
  
    public function RegisterItem(Request $request)
    {
         // 新しい本の情報を登録する関数

         $this->validate($request, [
            'title' => 'required|max:100',
            'author' => 'required|max:100',
            'genre' => 'required|max:100',
            'introduction' =>'required|max:1000',
            'image' => 'required',
            'price' => 'required',
            'inventory' => 'required',
        ]);

        // $item = new Item();
        // $item->fill($request->all())->save();

        // 又は

        // $item = new Item();
        // $item->title = $request->title;
        // $item->author = $request->author;
        // $item->genre = $request->genre;
        // $item->introduction = $request->introduction;
        // $item->image = $request->image;
        // $item->price = $request->price;
        // $item->inventory = $request->price;
        // $item->save();

        return redirect('/index');
    }
  
    public function UpdateItem(Request $request, $id)
    {
        // 編集対象の本の情報を登録する関数
        
        $this->validate($request, [
            'title' => 'required|max:100',
            'author' => 'required|max:100',
            'genre' => 'required|max:100',
            'introduction' =>'required|max:1000',
            'image' => 'required',
            'price' => 'required',
            'inventory' => 'required',
        ]);
       
        // $item = Item:: find($id);
        // $item->title = $request->title;
        // $item->author = $request->author;
        // $item->genre = $request->genre;
        // $item->introduction = $request->introduction;
        // $item->image = $request->image;
        // $item->price = $request->price;
        // $item->inventory = $request->price;
        // $item->save();

        return redirect('/index');
    }

}
