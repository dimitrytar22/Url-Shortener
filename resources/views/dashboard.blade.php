<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg lg:w-full">
                <div class="p-6 text-2xl font-bold text-center text-gray-900">
                    {{ __("Your shortened links") }}
                </div>

                <div class="overflow-x-auto">
                    <table class="table-auto border-collapse border border-gray-200 w-full text-center mt-6">
                        <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Origin</th>
                            <th class="border border-gray-300 px-4 py-2">Shortened</th>
                            <th class="border border-gray-300 px-4 py-2">Clicks</th>
                            <th class="border border-gray-300 px-4 py-2">Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shortenedURLs as $shortenedURL)
                            <tr class="bg-white">
                                <td class="border border-gray-300 px-4 py-2 ">{{$shortenedURL->id}}</td>
                                <td class="border border-gray-300 px-4 py-2 "><a target="_blank"
                                                                                href="{{$shortenedURL->origin}}">{{$shortenedURL->origin}}</a>
                                </td>
                                <td class="border border-gray-300 px-4 py-2 "><a target="_blank"
                                                                                href="{{$shortenedURL->shortened}}">{{ $shortenedURL->shortened}}</a>
                                </td>
                                <td class="border border-gray-300 px-4 py-2 ">{{$shortenedURL->clicks}}</td>
                                <td class="border border-gray-300 px-4 py-2 ">{{\Carbon\Carbon::parse($shortenedURL->created_at)->format('Y-m-d H:i:s')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                {{$shortenedURLs->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
