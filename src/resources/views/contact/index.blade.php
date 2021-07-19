@extends('layouts.app')
@section('title', "お問い合わせ|" . config('app.name'))
@section('content')
    <section>
        <div class="wrapper">
            <h2 class="title">お問い合わせ</h2>
            <p class="description">『{{ config('app.name') }}』に関するお問い合わせは、ツイッターアカウント@you_tube_rankへのDMにてお願いいたします。</p>
        </div>
    </section>
@endsection
