@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/today.css') }}">
@endsection

@section('main')
    <div class="content">
        <header class="header">
            <div class="home">
            <form action="/" method="get">
                @csrf
                <button class="home__button" type="submit">
                    ホームへ戻る
                </button>
            </form>
            </div>
            <div class="register">
            <form action="/register" method="get">
                @csrf
                <button class="register__button" type="submit">
                    新規登録
                </button>
            </form>
            </div>
            <div class="login">
            <form action="/login" method="get">
                @csrf
                <button class="login__button" type="submit">
                    ログイン
                </button>
            </form>
            </div>
        </header>
        <div class="outer">
            <h1 class="title">
                {{ $word->word }}
            </h1>
            <div class="button__outer">
                <form action="{{ route('look.today') }}" method="get">
                    @csrf
                    <button disabled class="button" type="submit">
                        この言葉をお気に入りにする
                    </button>
                </form>
                <form action="{{ route('look.today') }}" method="get">
                    @csrf
                    <button class="button" type="submit">
                        お気に入りリスト
                    </button>
                </form>
                <form action="{{ route('look.today') }}" method="get">
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