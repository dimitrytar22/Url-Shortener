@extends('layouts.main')
@section('title')
    URL Shortener
@endsection

@section('content')
    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

    </style>
    <div class="container mx-auto h-screen">
        <div
            class="relative h-[350px] overflow-hidden bg-gradient-to-r from-teal-400 via-blue-500 to-indigo-600 bg-cover bg-center">
            <div class="absolute inset-0 h-full w-full overflow-hidden bg-pale rounded border-2 bg-fixed">
                <div class="flex items-center justify-center w-full h-full animate-fade-in">
                    <div class="px-6 text-center text-white md:px-12 w-full">
                        <h1 class="mb-6 text-5xl font-bold">Free URL Shortener</h1>
                        <h3 class="mb-8 text-3xl font-semibold">Make your links shorter and smarter!</h3>

                        <div class="w-full flex items-center justify-center m-2">
                            <form action="{{route('shortenedurl.store')}}" class="url-form" method="POST">
                                <input type="hidden" value="{{ csrf_token() }}" name="csrf">
                                <input
                                    class="url-origin font-mono font-black section-header-input-field w-1/2 inline-block rounded border-2 text-black px-6 pb-[6px] pt-2 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0"
                                    type="text" name="origin" placeholder="Enter link here">
                                <button type="submit"
                                        class="url-form-button section-header-input-button inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0"
                                        data-twe-ripple-init data-twe-ripple-color="light">
                                    Shorten URL
                                </button>
                            </form>
                        </div>

                        <div class="w-full flex items-center justify-center">
                            <input readonly
                                   class="new-url w-1/2 font-mono font-black rounded border-2 text-black px-6 pb-[6px] pt-2 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0"/>
                            <button type="button"
                                    class="copy-btn inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0"
                                    data-twe-ripple-init data-twe-ripple-color="light">
                                Copy
                            </button>
                        </div>

                        <div class="px-6 mt-2 font-mono text-neutral-50">
                            <p>By using Shorten URL, you agree to <a href="{{route('main.index')}}"
                                                                     class="text-neutral-100">Rebrandly’s Terms of
                                    use</a>,
                                <a href="{{route('main.index')}}" class="text-neutral-100">Privacy Policy</a> and <a
                                    href="{{route('main.index')}}" class="text-neutral-100">Cookie
                                    Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="header bg-custom-blue bg-opacity-50 py-12">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-4xl font-bold text-white mb-4">Free URL Shortener</h1>
            <p class="text-lg text-white opacity-80">
                Shorten your links quickly and easily.
            </p>
        </div>
    </section>

    <section class="about bg-pale py-12">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-dark-gray mb-4">Fast & Simple URL Shortener</h2>
            <p class="text-lg text-gray-700 mb-6">
                Transform long links into short, memorable ones for sharing anywhere.
            </p>
            <img src="{{ asset('imgs/contact.png') }}" alt="Contact" class="mx-auto mb-6 w-40 h-40">
            <a href="{{route('feedback')}}"
                class="bg-custom-blue text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-custom-blue/80 transition duration-300">
                Share your feedback
            </a>
        </div>
    </section>


    <script src="{{asset('js/main.js')}}">

    </script>

@endsection
<script></script>
