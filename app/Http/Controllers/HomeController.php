<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;

class HomeController extends Controller
{
    /**
     * ホーム画面
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('home.index');
    }
}
