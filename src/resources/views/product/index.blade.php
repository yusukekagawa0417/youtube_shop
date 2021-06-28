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
                @foreach ($products_with_evaluations as $key => $product)
                    <div class="card__item">
                        <div class="card__contents">
                            <a href="{{ action('ProductController@show', $product['id'] ) }}">
                                <img class="card__image"
                                     src="{{ $product['image'] }}">
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
                                        {{ Str::limit($product['name'], 20, '...') }}
                                    </div>
                                    <div class="card__watching-times">
                                        <div class="card__watching-times--icon">
                                            <i class="fab fa-youtube"></i>
                                        </div>
                                        {{ $product['watching_times'] }} 回視聴
                                    </div>
                                    <div class="card__good-number">
                                        <div class="card__good-number--icon">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div>
                                        {{ $product['good_number'] }}
                                    </div>
                                    <div class="card__categories">
                                        @foreach ($product->genres as $genre)
                                            <a class="card__category" href="#">
                                                {{ $genre['name'] }}
                                            </a>
                                        @endforeach 
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
