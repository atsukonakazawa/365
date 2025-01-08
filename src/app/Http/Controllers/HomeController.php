<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Word;


class HomeController extends Controller
{
    public function home(){

        return view('before-login.home');
    }

    public function today(){

        // 並び順をランダムにする
        $words = DB::table('words')
                ->get();
        $word = $words
                ->shuffle()
                ->first();

        return view('before-login.today', compact('word'));
    }


}
