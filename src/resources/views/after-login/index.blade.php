@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('main')
    <div class="content">
        <header class="header">
            <div class="logout">
            <form action="/logout" method="post">
                @csrf
                <button class="logout__button" type="submit">
                    ログアウト
                </button>
            </form>
            </div>
        </header>
        <div class="outer">
            <div class="hello">
                <h2>{{ Auth::user()->name }}さん、今日もおつかれさま。</h2>
            </div>
            <h1 class="title">
                365words
            </h1>
            <p class="title__p">
                子育てに奮闘するあなたへ
            </p>
            <p class="title__message">
                あなたも、子どもも、<br>
                精一杯生きている。<br>
                だからこそ、お互いに<br>
                笑って、ぶつかって、<br>
                怒って、泣いて、疲れて、<br>
                でも心配で、愛おしくて。<br>
                毎日、必死だから。<br>
                いろんな感情が混ざり合う中で<br>
                あっという間に<br>
                日々は過ぎていってしまうから。<br>
                ふとした時や、今夜眠るとき、<br>
                子どもにどんな言葉をかけてあげたらいいのか？<br>
                このサイトでは、そんな迷いがある方や<br>
                乳幼児を育てる方を中心に<br>
                そのヒントを探すお手伝いをします。<br>
                今しかない、<br>
                その瞬間を大切に思えるように・・・
            </p>
            <div class="button__outer">
                <form action="{{ route('index.today') }}" method="get">
                    @csrf
                    <button class="button" type="submit">
                        今日のことば
                    </button>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </form>
            </div>
        </div>
    </div>
@endsection