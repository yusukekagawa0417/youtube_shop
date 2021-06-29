<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7KT6KP4NWH"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7KT6KP4NWH');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('messages.app_description') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:image" content="{{ asset('image/hero-book2.jpg') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:description" content="{{ __('messages.app_description') }}">
    <meta name="twitter:card" content="summary_large_image">
    <title>@yield('title', config('app.name'))</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
</head>
