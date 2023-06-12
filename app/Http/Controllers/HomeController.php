<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

use App\Models\Home;
use App\Models\Item;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * ユーザ表示
     * 
     
    public function user_up()
    {
        $chema::create{'users', function (Blueprint $table)} {
            $table->string('nick_name');
        };
    }
*/

    /**
     * ホーム画面
     * 
     * @param Request $request
     * @return Response
     */
    public function home(Request $request)
    {
        return view('home.index');
    }

    /**
     * ホーム画面(商品管理画面へ遷移)
     * 
     * @param Request $request
     * @return Response
     */
    public function item(Request $request)
    {
        $items = Item::all();
        return view('items.index',compact('items'));
    }

    /**
     * ホーム画面(商品一覧画面へ遷移)
     * 
     * @param Request $request
     * @return Response
     
    public function search(Request $request)
    {
        $items = Item::all();
        return view('items.index',compact('items'));
    }
    */

    /**
     * ホーム画面(利用者一覧画面へ遷移)
     * 
     * @param Request $request
     * @return Response
     
    public function account(Request $request)
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }
    */

}
