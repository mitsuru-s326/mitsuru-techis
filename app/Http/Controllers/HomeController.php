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
     * @return Response
     */
    public function home(Request $request)
    {
        $user = User::find(session("id"));
        // $user = User::find(session("id"))
        //     ->item_user()
        //     ->withPivot('date AS dates')
        //     ->orderBy('dates', 'asc')
        //     ->get();
        
        // $user = User::where('id','=',session("id"))
        //         ->orderBy('date','ASC')->get();
        //dd($user);
        // $sort = $request->input('sort');
        // if(!empty($sort)) {
        //     if ($sort=='date_up'){
        //         $->orderBy('date','ASC');
        //     }
        //     elseif($sort=='date_down'){
        //         $->orderBy('date','DESC');
        //     }
        //     }

        return view('home.index', ["user" => $user]);
    }
} 