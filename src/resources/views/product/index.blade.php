@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <section>
        <div class="hero">
            <img src="{{ asset('/image/hero-book2.jpg') }}" class="hero__image">
            <p class="hero__info">YouTubeの動画データを集計し、<br>お薦めされている本をランキングにしました</p>
        </div>
        <div class="wrapper">
            <div class="card">
                <a target="_blank"
                   href="https://www.amazon.co.jp/gp/product/B00KFB5DJC/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00KFB5DJC&linkCode=as2&tag=youtubeshop-22&linkId=e7ccd6c0904704ecca53cb42b7e009f1">
                    <img class="card__image"
                         src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00KFB5DJC&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=youtubeshop-22">
                </a>
                <div class="card__info">
                    <div class="card__rank card__rank--1">
                        <i class="fas fa-crown"></i>&nbsp;1
                    </div>
                    <div class="card__title">
                        7つの習慣
                    </div>
                    <div class="card__description">
                        全世界3000万部 日本国内220万部 不朽のベストセラー『完訳 7つの習慣 人格主義の回復』を、内容はそのままに、読みやすく...
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
                <a target="_blank"
                   href="https://www.amazon.co.jp/gp/product/B00HQ6O7BO/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00HQ6O7BO&linkCode=as2&tag=youtubeshop-22&linkId=d1cb39b55131df45b8e7a05c391abeff">
                    <img class="card__image"
                         src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00HQ6O7BO&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=youtubeshop-22">
                </a>
                <div class="card__info">
                    <div class="card__rank card__rank--2">
                        <i class="fas fa-crown"></i>&nbsp;2
                    </div>
                    <div class="card__title">
                        7つの習慣
                    </div>
                    <div class="card__description">
                        全世界3000万部 日本国内220万部 不朽のベストセラー『完訳 7つの習慣 人格主義の回復』を、内容はそのままに、読みやすく...
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
                <a target="_blank"
                   href="https://www.amazon.co.jp/gp/product/B00HQ6O7BO/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00HQ6O7BO&linkCode=as2&tag=youtubeshop-22&linkId=d1cb39b55131df45b8e7a05c391abeff">
                    <img class="card__image"
                         src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00HQ6O7BO&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=youtubeshop-22">
                </a>
                <div class="card__info">
                    <div class="card__rank card__rank--3">
                        <i class="fas fa-crown"></i>&nbsp;3
                    </div>
                    <div class="card__title">
                        7つの習慣
                    </div>
                    <div class="card__description">
                        全世界3000万部 日本国内220万部 不朽のベストセラー『完訳 7つの習慣 人格主義の回復』を、内容はそのままに、読みやすく...
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
