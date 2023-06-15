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
     * ホーム画面
     * 
     * @param Request $request
     * @return Response
     */
    public function home(Request $request)
    {
        $user = User::find(session("id"));
        return view('home.index', ["user" => $user]);
    }
} 