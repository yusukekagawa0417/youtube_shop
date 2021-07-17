@extends('layouts.app')
@section('title', "商品一覧|" . config('app.name'))
@section('content')
    <section>
        @include('shared.hero')
        <div class="search">
            <div class="search__info">
                @php
                    if (!empty($genre_name)) {
                        echo "絞り込み：" . $genre_name;
                    }
                @endphp
            </div>
            <div class="cp_ipselect cp_sl01">
                <form name="order_form">
                    <select name="order_select" onChange="changeOrder()">
                        <option value="good_number" @if('good_number' === $order) selected @endif>
                            評価の高い順
                        </option>
                        <option value="watching_times" @if('watching_times' === $order) selected @endif>
                            視聴回数の多い順
                        </option>
                    </select>
                </form>
                <script>
                    function changeOrder()
                    {
                        const q = document.order_form.order_select.value;
                        var url = new URL(location);
                        url.searchParams.set("order", q);
                        window.location.href = url;
                    }
                </script>
            </div>
        </div>
        <div class="wrapper">
            <div class="card__list">
                @foreach ($products_with_evaluations as $key => $product)
                    <div class="card__item">
                        <div class="card__contents">
                            <a target="_blank"
                               rel="noopener noreferrer"
                               href="{{ $product['url'] }}">
                                <img class="card__image"
                                     src="{{ $product['image'] }}"
                                     alt="{{ $product['name'] }}">
                            </a>
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
                                
                                <a target="_blank"
                                    rel="noopener noreferrer"
                                    href="{{ $product['url'] }}">
                                    <div class="card__title">
                                        {{ Str::limit($product['name'], 40, '...') }}
                                    </div>
                                </a>
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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
