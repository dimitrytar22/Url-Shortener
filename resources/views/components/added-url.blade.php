{{-- <div><a class='url text-white hover:text-gray-400 m-5'
        href="{{ route('shortenedurl.show', $url->shortened) }}">{{ route('shortenedurl.show', $url->shortened) }}</a>
</div> --}}
<div id="output-div">
    <div class="content-row" id="new-url-label">Your short URL:</div>
    <div id="new-url"><a class='url text-white hover:text-gray-400 m-5'
            href="{{ route('shortenedurl.show', $url->shortened) }}">{{ route('shortenedurl.show', $url->shortened) }}</a>
    </div>
    <button type="button" class="copy-btn" data-clipboard-target="#new-url" class="content-row button">Copy</button>
</div>

