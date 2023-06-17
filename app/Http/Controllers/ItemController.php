<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    
    public function GetIndex(Request $request)
    {
        // 商品一覧を取得する関数
        $items = Item::where("status", "active")->latest()->paginate(6);
        return view('items.index', ["items" => $items]);
    }

    public function RegisterItem(Request $request)
    {
        //  新しい本の情報を登録する関数

            $this->validate($request, [
            'title' => 'required|max:30',
            'author' => 'required|max:30',
            'publisher' => 'required|max:30',
            'genre' => 'required|max:30',
            'introduction' =>'required|max:200',
            'image' =>'required|max:64|mimes:jpg,jpeg,png',
            'price' => 'required|integer|min:1',
            'inventory' => 'required|integer|min:0',
            ]);

        $item = new Item();

        $item->title = $request->title;
        $item->author = $request->author;
        $item->publisher = $request->publisher;
        $item->genre = $request->genre;
        $item->introduction = $request->introduction;
        $item->image = base64_encode(file_get_contents($request->image));
        $item->price = $request->price;
        $item->inventory = $request->inventory;
        $item->save();
    
        return redirect('/item');
    }
    
    public function UpdateItem(Request $request, $id)
    {
        // 編集対象の本の情報を登録する関数
       
        // dd($request->image ?? true);

        $this->validate($request, [
            'title' => 'required|max:30',
            'author' => 'required|max:30',
            'publisher' => 'required|max:30',
            'genre' => 'required|max:30',
            'introduction' =>'required|max:200',
            'image' =>'max:64|mimes:jpg,jpeg,png',
            'price' => 'required|integer|min:1',
            'inventory' => 'required|integer|min:0',
            ]);

        $item = Item::find($id);

        $item->title = $request->title;
        $item->author = $request->author;
        $item->publisher = $request->publisher;
        $item->genre = $request->genre;
        $item->introduction = $request->introduction;

        if (isset($request->image)){
            $item->image = base64_encode(file_get_contents($request->image));
        }

        $item->price = $request->price;
        $item->inventory = $request->inventory;
        $item->save();

        return redirect('/item');
        }

    public function GetUpdateItem(Request $request, $id)
    {
        // 編集対象の本に関する情報を取得する関数
        $item = Item::find($id);

        return view('items.edit', ["item" => $item]);
    }

    public function DeleteItem($id)
    {
        // 編集対象の本の情報を削除する関数
        $item = Item::find($id);
        $item->status = 'delete';
        $item->save();
        return redirect('/item');
    }
   
}
