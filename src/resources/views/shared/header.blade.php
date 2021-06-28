<header class="header">
    <h1 class="header__title">
        <a href="/">{{ config('app.name') }}</a>    
    </h1>
    <nav class="header__nav">
        <ul class="header__list">
            <li class="header__list">
                <a class="header__link"
                   href="https://twitter.com/share?
                    url=https://youtube-rank.net&
                    hashtags=YouTubeRank&
                    text={{ __('messages.app_description') }}" 
                    rel="nofollow" 
                    target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="header__list">
                <a href="#" class="header__link">
                <a href="http://www.facebook.com/share.php?u=https://youtube-rank.net"
                   rel="nofollow"
                   target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>
