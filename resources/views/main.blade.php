@extends('layouts.main')
@section('title')
    URL Shortener
@endsection

@section('content')
    <div class="container mx-auto h-screen ">
        <div
            class="relative h-[350px] overflow-hidden bg-[url('https://tecdn.b-cdn.net/img/new/slides/041.webp')] bg-cover bg-[50%] bg-no-repeat">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="mb-6 text-5xl font-bold">Heading</h1>
                        <h3 class="mb-8 text-3xl font-bold">Subeading</h3>
                        <button type="button"
                            class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Call to action
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="header">
        <div class="section-inner">

            <div class="section-header-main">
                <div class="section-header-wrapper">

                    <div class="section-header-title">
                        Free URL Shortener
                    </div>
                    <div class="section-header-form">
                        {{-- <form action="{{route('shortenedurl.store')}}" method="post"> --}}
{{-- @csrf  --}}
                        <input class="section-header-input-field" type="text" name="origin" placeholder="Enter link here">
                        <input class="section-header-input-button" type="submit" value="Shorten URL">
                         {{-- </form>  --}}
                    </div>
                    <div class="section-header-urls m-3">
                        <div id="output-div">
                            <div class="content-row" id="new-url-label">Your short URL:</div>
                            <input class="new-url" />

                            <button type="button" class="copy-btn" data-clipboard-target="#new-url"
                                class="content-row button">Copy</button>
                        </div>


                    </div>
                    <div class="section-header-subtitle">
                        By clicking Shorten URL, ypu agree to Rebrandly’s Terms of use, Privacy Policy and Cookie Policy
                    </div>

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.section-about-call-button').click(function() {
                    alert('clicked!');

                });
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
                            data = JSON.parse(data);
                            // var newUrl = data.replace(/<[^>]*>?/gm, '');
                            var newUrl = data['shortened'];
                            $('.new-url').val(newUrl);
                        }

                    });
                });
                $('.copy-btn').click(function() {
                    copyToClipboard($(".new-url").val());
                });

                function copyToClipboard(data) {

                    navigator.clipboard.writeText(data);
                }

            });
        </script>
    </section>

    <section class="about">
        <div class="section-about-wrapper">
            <div class="section-about-text-wrapper">

                <span class="section-about-text">
                    <div class="section-about-text-title">
                        A Fast and Simple URL Shorter
                    </div>
                    <div class="section-about-text-subtitle">
                        Free URL Shortener for transforming long, ugly links into nice, memorable and trackable short
                        URLs.
                        Use it to shorten links for any social media platforms, blogs, SMS, emails, ads, or pretty much
                        anywhere else you want to share them. Twitter, Facebook, YouTube, Instagram, WhatsApp, emails,
                        SMS,
                        videos. RB.GY is the best free alternative to generic URL shorteners like bitly and tinyurl.
                        After
                        shorterning the URL, check how many clicks it received.
                    </div>
                </span>
                <span class="section-about-call">
                    <span class="section-about-call-image"><img src="{{ asset('imgs/contact.png') }}" alt="contact.png"
                            width="185px" height="185px"></span>
                    <span class="section-about-call-title">Experience the benefits of link management for your
                        business</span>
                    <div class="section-about-call-button-wrapper"><button class="section-about-call-button">Call
                            us</button></div>
                </span>
            </div>
        </div>
    </section>
@endsection
<script></script>
