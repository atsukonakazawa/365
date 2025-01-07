<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'word' => '大好きだよ'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => '今日は⚪⚪︎をすごく頑張っていたね！すごく上手だったよ。'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => 'ちゃんと元どおりの場所にお片づけできて偉かったね！'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => '⚪︎⚪︎してくれてありがとう'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => 'お外では手を繋ごうね'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => 'そーっと持っていくと、こぼれないよ'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => 'お片づけゲームしようか！'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => 'お野菜を食べると強くなれるよ'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => 'オムツを替えて気持ちよくしようね'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => '今日はいい天気だからお散歩に行こうね'
        ];
        DB::table('words')->insert($param);
        $param = [
            'word' => 'どうしたの？眠いのかな？'
        ];
        DB::table('words')->insert($param);
    }
}
