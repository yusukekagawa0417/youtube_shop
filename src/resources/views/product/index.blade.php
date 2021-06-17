@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <section>
        <div class="hero">
            <img src="http://placehold.jp/600x300.png" class="hero__image">
        </div>
        <div class="wrapper">
            <div class="card">
                <img src="http://placehold.jp/150x200.png" class="card__image">
                <div class="card__info">
                    <div class="card__rank">
                        1
                    </div>
                    <div class="card__title">
                        7つの習慣
                    </div>
                    <div class="card__categories">
                        <a class="card__category" href="#">
                            本
                        </a>
                        <a class="card__category" href="#">
                            自己啓発
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="http://placehold.jp/150x200.png" class="card__image">
                <div class="card__info">
                    <div class="card__rank">
                        2
                    </div>
                    <div class="card__title">
                        7つの習慣
                    </div>
                    <div class="card__categories">
                        <a class="card__category" href="#">
                            本
                        </a>
                        <a class="card__category" href="#">
                            自己啓発
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
