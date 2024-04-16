@extends('layouts.main')
@section('title')
    URL Shortener
@endsection

@section('content')
    <section class="header">
        <div class="section-inner">
            <div class="section-header-head">
                <span class="header-links">
                    <a href="/home">Home</a>
                    <a href="/statistics">Statistics</a>
                    <a href="/QR-code">QR Code Generator</a>
                    <div class="register-login">
                        <a href="/register">Register</a>
                        <a href="/login">Login</a>
                    </div>
                </span>

            </div>
            <div class="section-header-main">
                <div class="section-header-wrapper">

                    <div class="section-header-title">
                        Free URL Shortener
                    </div>
                    <div class="section-header-form">
                        <form action="#">
                            <input class="section-header-input-field" type="text" placeholder="Enter link here">
                            <input class="section-header-input-button" type="submit" value="Shorten URL">
                        </form>
                    </div>
                    <div class="section-header-subtitle">
                        By clicking Shorten URL, ypu agree to Rebrandly’s Terms of use, Privacy Policy and Cookie Policy
                    </div>

                </div>
            </div>
        </div>
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

                </span>
            </div>
        </div>
    </section>

    <section class="footer">
        <section class="author">

        </section>
        <section class="footer-links">

        </section>
    </section>
@endsection
