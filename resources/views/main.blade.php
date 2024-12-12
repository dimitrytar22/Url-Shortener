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
        <div class="relative h-[350px] overflow-hidden bg-gradient-to-r from-teal-400 via-blue-500 to-indigo-600 bg-cover bg-center">
            <div class="absolute inset-0 h-full w-full overflow-hidden bg-pale rounded border-2 bg-fixed">
                <div class="flex items-center justify-center w-full h-full animate-fade-in">
                    <div class="px-6 text-center text-white md:px-12 w-full">
                        <h1 class="mb-6 text-5xl font-bold">Free URL Shortener</h1>
                        <h3 class="mb-8 text-3xl font-semibold">Make your links shorter and smarter!</h3>

                        <div class="w-full flex items-center justify-center m-2">
                            <input
                                class="font-mono font-black section-header-input-field w-1/2 inline-block rounded border-2 text-black px-6 pb-[6px] pt-2 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                                type="text" name="origin" placeholder="Enter link here">
                            <button type="button"
                                    class="section-header-input-button inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                                    data-twe-ripple-init data-twe-ripple-color="light">
                                Shorten URL
                            </button>
                        </div>

                        <div class="w-full flex items-center justify-center">
                            <input readonly
                                   class="new-url w-1/4 font-mono font-black rounded border-2 text-black px-6 pb-[6px] pt-2 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600" />
                            <button type="button"
                                    class="copy-btn inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out focus:outline-none focus:ring-0 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                                    data-twe-ripple-init data-twe-ripple-color="light">
                                Copy
                            </button>
                        </div>

                        <div class="px-6 mt-2 font-mono text-neutral-50">
                            <p>By using Shorten URL, you agree to <a href="{{route('main.index')}}" class="text-neutral-100">Rebrandly’s Terms of use</a>,
                                <a href="{{route('main.index')}}" class="text-neutral-100">Privacy Policy</a> and <a href="{{route('main.index')}}" class="text-neutral-100">Cookie
                                    Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="header bg-custom-blue bg-opacity-50 py-12">
        <div class="section-inner container mx-auto text-center px-6">
            <div class="section-header-main">
                <div class="section-header-wrapper">
                    <div class="section-header-title text-5xl font-bold text-white mb-4">
                        Free URL Shortener
                    </div>
                    <div class="section-header-subtitle text-lg text-white opacity-80">
                        By clicking Shorten URL, you agree to Rebrandly’s Terms of Use, Privacy Policy, and Cookie Policy.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        $(document).ready(function() {
            // Button for shortening URL
            $('.section-header-input-button').click(function() {
                var origin = $('.section-header-input-field').val();
                $.ajax({
                    url: "{{ route('shortenedurl.store') }}",
                    method: "post",
                    dataType: 'html',
                    data: {
                        'origin': origin,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(data) {
                        data = JSON.parse(data)['data'];
                        var newUrl = data['shortened'];
                        $('.new-url').val(newUrl);
                    }
                });
            });

            // Button to copy the shortened URL
            $('.copy-btn').click(function() {
                $(".new-url").select();
                document.execCommand('copy');
            });
        });
    </script>

    </section>

    <section class="about bg-pale py-16">
        <div class="section-about-wrapper flex flex-col lg:flex-row items-center justify-center gap-12">
            <div class="section-about-text-wrapper text-center lg:text-left">
                <div class="section-about-text">
                    <div class="section-about-text-title text-4xl font-bold text-dark-gray mb-4">
                        A Fast and Simple URL Shortener
                    </div>
                    <div class="section-about-text-subtitle text-lg text-gray-700">
                        Free URL Shortener for transforming long, ugly links into nice, memorable and trackable short
                        URLs. Use it to shorten links for any social media platforms, blogs, SMS, emails, ads, or pretty much
                        anywhere else you want to share them. Twitter, Facebook, YouTube, Instagram, WhatsApp, emails,
                        SMS, videos. RB.GY is the best free alternative to generic URL shorteners like bitly and tinyurl.
                        After shortening the URL, check how many clicks it received.
                    </div>
                </div>
            </div>
            <div class="section-about-call text-center lg:text-left flex flex-col items-center lg:items-start">
                <div class="section-about-call-image mb-4">
                    <img src="{{ asset('imgs/contact.png') }}" alt="contact.png" width="185px" height="185px">
                </div>
                <div class="section-about-call-title text-2xl font-semibold text-dark-gray mb-4">
                    Experience the benefits of link management for your business
                </div>
                <div class="section-about-call-button-wrapper">
                    <button class="section-about-call-button bg-custom-blue text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-custom-blue/80 transition duration-300">
                        Call us
                    </button>
                </div>
            </div>
        </div>
    </section>

@endsection
<script></script>
