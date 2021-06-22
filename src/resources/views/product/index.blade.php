@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <section>
        <div class="hero">
            <img src="{{ asset('/image/hero-book2.jpg') }}" class="hero__image">
            <p class="hero__info">YouTubeの動画データを集計し<br>お薦めされている本をランキング化</p>
        </div>
        <div class="wrapper">
            <div class="card__list">
                @foreach ($products as $key => $value)
                    <div class="card__item">
                        <div class="card__contents">
                            <a target="_blank"
                            href="{{ $value['url'] }}">
                                <img class="card__image"
                                    src="{{ $value['image'] }}">
                                <div class="card__info">
                                    @if ($key + 1 <= 3)
                                        <div class="card__rank card__rank--{{ $key + 1 }}">
                                            <i class="fas fa-crown"></i>&nbsp;{{ $key + 1 }}
                                        </div>
                                    @else
                                        <div class="card__rank">
                                            {{ $key + 1 }}
                                        </div>
                                    @endif
                                    <div class="card__title">
                                        {{ $value['name'] }}
                                    </div>
                                    <div class="card__description">
                                        {{ $value['description'] }}
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
                            </a>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </section>
@endsection
