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
     * ホーム画面を表示する
     * 
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * */
    public function home(Request $request)
    {
        $user = User::find(session("id"));
        // $items = User::find(session("id"))
        $items = $user
            ->items()
            ->withPivot('date')
            ->orderBy('date', 'asc')
            ->get();
    
        return view('home.index', ["items" => $items,"user" => $user]);
    }
} 