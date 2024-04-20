<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{ asset('js/script.js') }}" defer></script>
        
    <title>@yield('title')</title>
</head>

<body>
    <section class="nav">
        <div class="section-header-head">
            <span class="header-links">
                <a href="{{route('main.index')}}">Home</a>
                <a href="{{route('statistics.index')}}">Statistics</a>
                <a href="/QR-code">QR Code Generator</a>
                <div class="register-login">
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                </div>
            </span>

        </div>
    </section>

    @yield('content')

    <section class="footer">
        <section class="author">
            <div class="section-author-title">Powered by Tarasenko</div>
        </section>
        <section class="footer-links">
            <div class="section-footer-links-site">
                <span class="section-footer-links-span">
                    <span class="section-footer-links-wrapper">
                        <a href="{{route('main.index')}}" class="section-footer-link">What is a branded ink</a>
                        <a href="{{route('main.index')}}" class="section-footer-link">UTM builder</a>
                        <a href="{{route('main.index')}}" class="section-footer-link">Link retargeting</a>
                        <a href="{{route('main.index')}}" class="section-footer-link">Link shortener</a>
                    </span>
                    <span class="section-footer-links-wrapper">
                        <a href="{{route('main.index')}}" class="section-footer-link">Link tracking</a>
                        <a href="{{route('main.index')}}" class="section-footer-link"></a>
                        <a href="{{route('main.index')}}" class="section-footer-link">TinyURL alternative</a>
                    </span>
                </span>
            </div>
            <div class="section-footer-links-policy"></div>
        </section>
        
</body>

</html>
