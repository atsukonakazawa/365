<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Word;

class MainController extends Controller
{
    public function index()
    {
        return view('after-login.index');
    }

    public function indexToday(Request $request){

        $userId = Auth::id();
        // 現在のログインユーザーIDを取得

        $words = Word::with('favorites')
                ->get();
        // wordsを取得し、関連するfavoritesも取得

        $word = $words
                ->shuffle()
                ->first();
        // 並び順をランダムにする

        return view('after-login.index_today', compact('word','userId'));
    }
}
