@extends('layouts.main')
@section('title')
    Statistics
@endsection

@section('content')
<div class=" mx-auto sm:px-6 lg:px-8">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 text-wrap break-words">
                <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white">
                    Rating of {{ $shortenedURLs->total() . ' urls' }}
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Origin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Shortened
                        </th>
                        <th scope="col" class="px-6 py-3">
                            User
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Clicks
                        </th>
                       
                    </tr>
                </thead>
                <tbody>

                    @foreach ($shortenedURLs as $shortenedURL)
                        <x-statistics-url :shortenedURL=$shortenedURL></x-statistics-url>
                    @endforeach
                </tbody>
            </table>
            {{$shortenedURLs->links()}}
        </div>
    </div>
@endsection
