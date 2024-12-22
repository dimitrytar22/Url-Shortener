<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('normalize.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title')</title>

    <style>
        /* Чтобы контент растягивался на всю высоту */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Контент страницы */
        .content-wrapper {
            min-height: 100%; /* Гарантирует, что контент всегда будет хотя бы на всю высоту экрана */
            padding-bottom: 100px; /* Отступ для футера */
        }

        /* Футер */
        footer {
            background-color: #2d2d2d;
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            position: relative;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="bg-gray-50">
<nav
    class="relative flex w-full items-center justify-between py-4 bg-light-gray border-b-2 shadow-md">
    <div class="flex w-full flex-wrap items-center justify-between px-4">
        <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row">
            <li class="mb-4 lg:mb-0 lg:pe-2">
                <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2"
                   href="{{ route('main.index') }}">Home</a>
            </li>
            <li class="mb-4 lg:mb-0 lg:pe-2">
                <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2"
                   href="{{ route('statistics.index') }}">Statistics</a>
            </li>
            <li class="mb-4 lg:mb-0 lg:pe-2">
                <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2"
                   href="{{ route('qrcode.index') }}">QR Code Generator</a>
            </li>
        </ul>
        @guest()
            <ul class="list-style-none flex flex-col ps-0 lg:flex-row">
                <li class="mb-4 lg:mb-0 lg:pe-2">
                    <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2"
                       href="{{ route('login') }}">Login</a>
                </li>
                <li class="mb-4 lg:mb-0 lg:pe-2">
                    <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2"
                       href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        @endguest
        @auth()
            <ul class="list-style-none flex flex-col ps-0 lg:flex-row">
                <li class="mb-4 lg:mb-0 lg:pe-2">
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-2">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </li>
            </ul>

        @endauth
    </div>
</nav>


<div class="content-wrapper py-12 bg-gray-100">
    @yield('content')
</div>

<footer>
    <div class="container mx-auto text-center py-4">
        <p class="text-gray-400">&copy; 2024 Url Shortener. All rights reserved.</p>
    </div>
</footer>

</body>

</html>
