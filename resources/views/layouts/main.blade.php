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
</head>

<body>


    {{-- <section class="nav">
        <div class="section-header-head">
            <span class="header-links">
                <a href="{{ route('main.index') }}">Home</a>
                <a href="{{ route('statistics.index') }}">Statistics</a>
                <a href="{{route('main.index')}}">QR Code Generator</a>
                @guest
                    <div class="register-login">
                        <a href="{{route('register')}}">Register</a>
                        <a href="{{route('login')}}">Login</a>
                    </div>
                @endguest
                @auth
                <div class="register-login">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                    
                </div>
                @endauth
            </span>

        </div>
    </section> --}}
    <nav
        class="flex-no-wrap relative flex w-full items-center justify-between bg-zinc-100 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4 bg-custom-blue border-b-2 ">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navigation container -->
            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                id="navbarSupportedContent1" data-twe-collapse-item>
                <!-- Logo -->
                <a class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                    href="{{route('main.index')}}">
                    <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 15px"
                        alt="TE Logo" loading="lazy" />
                </a>
                <!-- Left navigation links -->
                <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
                    <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                        <!-- Dashboard link -->
                        <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="{{ route('main.index') }}" data-twe-nav-link-ref>Home</a>
                    </li>
                    <!-- Team link -->
                    <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                        <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="{{ route('statistics.index') }}" data-twe-nav-link-ref>Statistics</a>
                    </li>
                    <!-- Projects link -->
                    <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                        <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="{{ route('qrcode.index') }}" data-twe-nav-link-ref>QR Code Generator</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>

            <!-- Right elements -->
            <div class="relative flex items-center">
                <!-- Icon -->
                @guest

                    <a class="me-4 text-neutral-600 dark:text-white" href="{{ route('register') }}">Register</a>
                    <a class="me-4 text-neutral-600 dark:text-white" href="{{ route('login') }}">Login</a>
                @endguest
                @auth
                    <a class="me-4 text-neutral-600 dark:text-white" href="{{ route('dashboard') }}">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input class="me-4 text-neutral-600 dark:text-white hover:cursor-pointer m-0 p-0" href="{{route('main.index')}}"
                            value="Log out" type="submit">
                    </form>
                @endauth
            </div>

    </nav>
    <div class="py-12 bg-pale-dark">
        @yield('content')

        <footer class="bg-white">
            <div class="container mx-auto px-8">
              <div class="w-full flex flex-col md:flex-row py-6">
                <div class="flex-1 mb-6 text-black">
                  <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{route('main.index')}}">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                      <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                      <path
                        class="plane-take-off"
                        d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                      />
                    </svg>
                    LANDING
                  </a>
                </div>
                <div class="flex-1">
                  <p class="uppercase text-gray-500 md:mb-6">Links</p>
                  <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Link tracking</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">What is a
                        branded ink</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">UTM
                        builder</a>
                    </li>
                  </ul>
                </div>
                <div class="flex-1">
                  <p class="uppercase text-gray-500 md:mb-6">Link
                    retargeting</p>
                  <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                    </li>
                  </ul>
                </div>
                <div class="flex-1">
                  <p class="uppercase text-gray-500 md:mb-6">Social</p>
                  <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                    </li>
                  </ul>
                </div>
                <div class="flex-1">
                  <p class="uppercase text-gray-500 md:mb-6">Company</p>
                  <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                      <a href="{{route('main.index')}}" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>


        
    </div>

</body>

</html>
