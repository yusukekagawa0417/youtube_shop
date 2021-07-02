@extends('layouts.app')
@section('title', "商品詳細|" . $product['name'] . "|" . config('app.name'))
@section('content')
    <section>
        @include('shared.hero')
        <div class="wrapper">
            <div class="card__item card__item--large">
                <div class="card__contents card__contents--no-line">
                    <a target="_blank"
                       rel="noopener noreferrer"
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
                                    <a class="card__category" href="/product?genre={{ $genre['id'] }}">
                                        {{ $genre['name'] }}
                                    </a>
                                @endforeach 
                            </div>
                            <div class="btn__amazon">
                                <a target="_blank"
                                   rel="noopener noreferrer"
                                   href="{{ $product['url'] }}"
                                   class="btn__amazon--link">
                                    <span>amazon</span>
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
