<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Word;

class FavoriteController extends Controller
{
    public function indexFavorite(Request $request){

        $userId = $request->user_id;
        $wordId = $request->word_id;
        $check  = Favorite::where('user_id',$userId)
                ->where('word_id',$wordId)
                ->first();

        if($check !== null){
            //もしお気に入り登録済みなら削除
            Favorite::where('user_id',$userId)
                ->where('word_id',$wordId)
                ->delete();
        }else{
            //お気に入り登録されていなければ、登録
            $result = [
                'user_id' => $userId,
                'word_id' => $wordId,
            ];
            Favorite::create($result);
        }

        $word = Word::where('id',$wordId)
                ->first();
        // 今お気に入り登録または解除したwordを取得

        return view('after-login.index_today', compact('word','userId'));
    }

}
