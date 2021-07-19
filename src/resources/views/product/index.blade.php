@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <section>
        @include('shared.hero')
        <div class="btn__twitter">
            <div>
            </div>
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"
               class="twitter-share-button"
               data-show-count="false"
               data-size="large"
               data-text="書籍ランキングサイトYouTubeRank"
               data-hashtags="YouTubeRank"
               data-url="https://youtube-rank.net/">
                Tweet
            </a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
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
                        <option value="good_number" @if($order === 'good_number') selected @endif>
                            いいね数の多い順
                        </option>
                        <option value="watching_times" @if($order === 'watching_times') selected @endif>
                            視聴回数の多い順
                        </option>
                        <option value="good_number_rate" @if($order === 'good_number_rate') selected @endif>
                            いいね率の高い順
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
                                        <i class="fas fa-play-circle"></i>
                                    </div>
                                    {{ number_format($product['watching_times']) }} 回視聴
                                </div>
                                <div class="card__good-number">
                                    <div class="card__good-number--icon">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                    {{ number_format($product['good_number']) }}
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
