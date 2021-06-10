<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('shared.head')
    <body>
        @yield('content')
        @include('shared.footer')
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
