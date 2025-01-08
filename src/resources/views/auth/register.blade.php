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
                新規登録
            </h1>
            <div class="register__outer">
                <form action="/register" method="post">
                    @csrf
                    <p class="register__p">
                        お名前
                    </p>
                    <input class="register__input" type="text" name="name" value="{{ old('name') }}" />
                    <p class="register__p">
                        メールアドレス
                    </p>
                    <input class="register__input" type="email" name="email" value="{{ old('email') }}" />
                    <p class="register__p">
                        パスワード
                    </p>
                    <input class="register__input" type="password" name="password" />
                    <p class="register__p">
                        パスワード（確認用）
                    </p>
                    <input class="register__input" type="password" name="password_confirmation" />
                    <div class="button__outer">
                        <button class="button" type="submit">
                            登録
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection