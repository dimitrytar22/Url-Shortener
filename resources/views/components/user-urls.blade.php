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
                    Clicks
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
                <x-user-url :shortenedURL=$shortenedURL></x-user-url>
            @endforeach
        </tbody>
    </table>
</div>
