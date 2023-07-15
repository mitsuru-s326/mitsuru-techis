<?php

namespace App\Http\Controllers;

use App\Models\Item_User;
use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{

    public function GetIndex(Request $request)
    {
        // 商品一覧を取得する関数
        $users = User::find(session("id"));
        $items = Item::where("status", "active")->latest()->paginate(6);
        return view('items.index', ["items" => $items,"keyword" => ""],["user" => $users],);
    }
        

    /**
     * Summary of Regitration
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function Regitration(Request $request)
    {
        //商品登録画面を取得する関数
        $users = User::find(session("id"));
        return view('items.registration',["user" => $users],);

    }

    public function RegisterItem(Request $request)
    {
        //  新しい料理の情報を登録する関数

        $this->validate($request, [
            'title' => 'required|max:20',
            'genre' => 'required|max:20',
            'time' => 'required|max:20',
            'introduction' => 'required|max:200',
            'material' => 'required|max:200',
            'image' => 'nullable|max:64|mimes:jpg,jpeg,png',
            'price' => 'required|integer|min:1',
            'recipe'=> 'required|max:200',
        ]);

        $item = new Item();

        $item->title = $request->title;
        $item->genre = $request->genre;
        $item->time = $request->time;
        $item->introduction = $request->introduction;
        $item->material = $request->material;
        if ($request->hasFile('image')) {
            $item->image = base64_encode(file_get_contents($request->image));
        }
        $item->price = $request->price;
        $item->recipe = $request->recipe;
        $item->save();

        return redirect('/search');
    }

    public function UpdateItem(Request $request, $id)
    {
        // 編集対象の料理の情報を登録する関数

        // dd($request->image ?? true);

        $this->validate($request, [
            'title' => 'required|max:20',
            'genre' => 'required|max:20',
            'time' => 'required|max:20',
            'introduction' => 'required|max:200',
            'material' => 'required|max:200',
            'image' => 'max:64|mimes:jpg,jpeg,png',
            'price' => 'required|integer|min:1',
            'recipe'=> 'required|page_url|max:200',
        ]);

        $item = Item::find($id);

        $item->title = $request->title;
        $item->genre = $request->genre;
        $item->time = $request->time;
        $item->introduction = $request->introduction;
        $item->material = $request->material;

        if (isset($request->image)) {
            $item->image = base64_encode(file_get_contents($request->image));
        }

        $item->price = $request->price;
        $item->recipe = $request->recipe;

        $item->save();

        return redirect('/item');
    }

    public function GetUpdateItem(Request $request, $id)
    {
        // 編集対象の本に関する情報を取得する関数
        $item = Item::find($id);
        $users = User::find(session("id"));

        return view('items.edit', ["item" => $item],["user" => $users],);
    }

    public function DeleteItem($id)
    {
        // 編集対象の本の情報を削除する関数
        $item = Item::find($id);
        $item->status = 'delete';
        $item->save();
        return redirect('/item');
    }
    public function Menu(Request $request)
    {
        // 献立を登録する関数
        $itemId = $request ->get('item_id');
        $user = User::find(session("id"));
        if($user->items->contains($itemId)){
            $user->items()->detach($itemId);
        }else{
            $user->items()->attach($itemId);
        }
        return redirect('/search');
    
        
    }

    public function day(Request $request)
    {
        // 献立に日付を登録する関数
        $item_id = $request->itemId;
        // dd($request);
        $user = User::find(session("id"));
        $test = Item_User::where('user_id',$user->id)->where('item_id',$item_id)->get()->first();
        $test->date = $request->date;
        $test->save();
        
        // $userId = $request
        // $itemId = $request ->get('date');
        

        return redirect('/home');   
    }

}