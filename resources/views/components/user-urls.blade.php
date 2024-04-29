<div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Origin URL
                </th>
                <th scope="col" class="px-6 py-3">
                    Shortened URL
                </th>
                <th scope="col" class="px-6 py-3">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shortenedURLs as $shortenedURL)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $shortenedURL->id }}
                    </th>
                    <td class="px-6 py-4">
                        <a href="{{ $shortenedURL->origin }}" target="_blank" class="hover:text-gray-950">{{ $shortenedURL->origin }}</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('shortenedurl.show', ['shortenedURL' => $shortenedURL->shortened])}}" target="_blank" class="hover:text-gray-950">{{route('shortenedurl.show', ['shortenedURL' => $shortenedURL->shortened])}}</a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $shortenedURL->created_at }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
