@extends('layouts.main')
@section('title')
    URL Shortener
@endsection

@section('content')
    <div class="container mx-auto h-screen ">
        <div
            class="relative h-[350px] overflow-hidden bg-zink-50 bg-cover bg-[50%] bg-no-repeat">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-pale rouned border-2 bg-fixed">
                <div class=" w-full h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12 w-full">
                        <h1 class="mb-6 text-5xl font-bold">Free URL Shortener</h1>
                        <h3 class="mb-8 text-3xl font-bold">Cut It</h3>

                        
                        <div class="  w-full  items-center justify-center m-2">
                            <input
                                class="font-mono  font-black section-header-input-field w-1/2 inline-block rounded border-2 text-black px-6 pb-[6px] pt-2 text-xs font-medium  leading-normal  transition duration-150 ease-in-out  focus:outline-none focus:ring-0 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                                type="text" name="origin" placeholder="Enter link here">
                            <button type="button"
                                class="section-header-input-button inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out  focus:outline-none focus:ring-0 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                                data-twe-ripple-init data-twe-ripple-color="light">
                                Shorten URL
                            </button>
                            
                        </div>
                        <div  class="  w-full h-full items-center justify-center"><input readonly
                            class=" new-url w-1/4  font-mono  font-black  rounded border-2 text-black px-6 pb-[6px] pt-2 text-xs font-medium  leading-normal  transition duration-150 ease-in-out  focus:outline-none focus:ring-0   dark:hover:bg-neutral-600 dark:focus:bg-neutral-600" />
                            <button type="button"
                            class="copy-btn inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out  focus:outline-none focus:ring-0 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Copy
                        </button>
                        <div class="px-6 mt-2 font-mono"><p>By using Shorten URL, ypu agree to <a href="{{route('main.index')}}">Rebrandly’s Terms of use</a>, <a href="{{route('main.index')}}">Privacy Policy</a> and <a href="{{route('main.index')}}">Cookie Policy</a></p></div>
                    </div>
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
                            var newUrl = data['shortened'];
                            $('.new-url').val(newUrl);
                        }

                    });
                });
                $('.copy-btn').click(function() {
                    $(".new-url").select();
                    document.execCommand('copy');
                    // copyToClipboard($(".new-url").val());
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
