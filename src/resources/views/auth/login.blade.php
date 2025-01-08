@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
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
        </header>
        <div class="outer">
            <h1 class="title">
                ログイン
            </h1>
            <div class="login__outer">
                <form action="/login" method="post">
                    @csrf
                    <p class="login__p">
                        メールアドレス
                    </p>
                    <input class="login__input" type="email" name="email" value="{{ old('email') }}" />
                    <p class="login__p">
                        パスワード
                    </p>
                    <input class="login__input" type="password" name="password" />
                    <div class="button__outer">
                        <button class="button" type="submit">
                            ログイン
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection