@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/today.css') }}">
@endsection

@section('main')
    <div class="content">
        <header class="header">
            <div class="home">
            <form action="/index" method="get">
                @csrf
                <button class="home__button" type="submit">
                    ホームへ戻る
                </button>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            </form>
            </div>
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
                <h2>{{ Auth::user()->name }}さん、どんな言葉を探している？</h2>
            </div>
            <h1 class="title">
                {{ $word->word }}
            </h1>
            <div class="button__outer">
                <form action="{{ route('index.favorite') }}" method="get">
                    @csrf
                    <button class="button" type="submit">
                        @if ($word->favorites->where('user_id', $userId)->isNotEmpty())
                        <span style="color: red; font-size: 45px;">❤️</span>
                        @else
                        <span style="color: black; font-size: 45px;">🤍</span>
                        @endif
                    </button>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="word_id" value="{{ $word->id }}">
                </form>
                <form action="{{ route('look.today') }}" method="get">
                    @csrf
                    <button class="button" type="submit">
                        お気に入りリスト
                    </button>
                </form>
                <form action="{{ route('index.today') }}" method="get">
                    <button class="button" type="submit">
                        他の言葉を見てみる
                    </button>
                </form>
                <form action="{{ route('look.today') }}" method="get">
                    @csrf
                    <button class="info__button" type="submit">
                        子育てに関する情報を<br>
                        見てみる
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection