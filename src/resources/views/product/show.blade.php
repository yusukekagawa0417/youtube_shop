@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <section>
        <div class="hero">
            <img src="{{ asset('/image/hero-book2.jpg') }}" class="hero__image">
            <p class="hero__info">YouTubeの動画データを集計し<br>お薦めされている本をランキング化</p>
        </div>
        <div class="wrapper">
            <div class="card__item card__item--large">
                <div class="card__contents card__contents--no-line">
                    <a target="_blank"
                        href="{{ $product['url'] }}">
                        <img class="card__image"
                              src="{{ $product['image'] }}">
                        <div class="card__info">
                            <div class="card__title">
                                {{ $product['name'] }}
                            </div>
                            <div class="card__watching-times">
                                <div class="card__watching-times--icon">
                                    <i class="fab fa-youtube"></i>
                                </div>
                                59,023 回視聴
                            </div>
                            <div class="card__good-number">
                                <div class="card__good-number--icon">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                                9,062
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
                <div class="card__contents">
                    <div class="card__description">
                        {{ $product['description'] }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
