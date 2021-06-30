<header class="header">
    <h1 class="header__title">
        <a href="/">{{ config('app.name') }}</a>    
    </h1>
    <nav class="header__nav">
        <ul class="header__list">
            <li class="header__item">
                <div id="hamburger__menu">
                    <i id="hamburger__hide" class="fa fa-times"></i>
                    <div>カテゴリから探す</div>
                    <div class="accordion-single js-acc-single">
                        <?php
                            $genre_groups = App\Models\Genre::getGenreGroupsByParentId();
                        ?>
                        @foreach ($genre_groups as $genre_group)
                            <div class="accordion-single-item js-acc-item">
                                <h2 class="accordion-single-title js-acc-single-trigger">
                                    {{ $genre_group['parent']['name'] }}
                                </h2>
                                @foreach ($genre_group['children'] as $child_genre)
                                    <div class="accordion-single-content">
                                        <p>
                                            <a href="/product?genre={{ $child_genre['id'] }}">
                                                {{ $child_genre['name'] }}
                                            </a>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="hamburger__cover"></div>
                <i id="hamburger__show" class="fas fa-bars"></i>
            </li>
        </ul>
    </nav>
</header>
