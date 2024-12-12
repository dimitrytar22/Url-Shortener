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
            min-height: 100%;  /* Гарантирует, что контент всегда будет хотя бы на всю высоту экрана */
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
<nav class="relative flex w-full items-center justify-between py-4 bg-light-gray border-b-2 shadow-md dark:bg-neutral-700">
    <div class="flex w-full flex-wrap items-center justify-between px-4">
        <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row">
            <li class="mb-4 lg:mb-0 lg:pe-2">
                <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2" href="{{ route('main.index') }}">Home</a>
            </li>
            <li class="mb-4 lg:mb-0 lg:pe-2">
                <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2" href="{{ route('statistics.index') }}">Statistics</a>
            </li>
            <li class="mb-4 lg:mb-0 lg:pe-2">
                <a class="text-gray-600 transition duration-200 hover:text-gray-800 focus:text-gray-800 lg:px-2" href="{{ route('qrcode.index') }}">QR Code Generator</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content-wrapper py-12 bg-gray-100">
    @yield('content')
</div>

<footer>
    <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
            <div class="flex-1 mb-6 text-white">
                <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                   href="{{ route('main.index') }}">
                    <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512.005 512.005">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502"
                              transform="matrix(1,0,0,1,0,0)" />
                        <path class="plane-take-off"
                              d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                        />
                    </svg>
                    LANDING
                </a>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-400 md:mb-6">Links</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Link tracking</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">What is a branded ink</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">UTM builder</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-400 md:mb-6">Link retargeting</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Terms</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-400 md:mb-6">Social</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Facebook</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Linkedin</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-400 md:mb-6">Company</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Official Blog</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">About Us</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{ route('main.index') }}" class="no-underline hover:underline text-white">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
