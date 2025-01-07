<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Word;


class HomeController extends Controller
{
    public function home(){

        return view('home');
    }

    public function today(){

        $today = Carbon::today();

        // 並び順をランダムにする
        $words = DB::table('words')
                ->get();
        $word = $words
                ->shuffle()
                ->first();

        return view('today', compact('word'));
    }


}
