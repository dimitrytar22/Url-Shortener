<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
        {{ $shortenedURL->id }}
    </th>
    <td class="px-6 py-4 break-all">
        <a href="{{ $shortenedURL->origin }}" target="_blank" class="hover:text-gray-950">{{ $shortenedURL->origin }}</a>
    </td>
    <td class="px-6 py-4">
        <a href="{{ route('shortenedurl.show', ['shortenedURL' => $shortenedURL->shortened]) }}" target="_blank"
            class="hover:text-gray-950">{{ route('shortenedurl.show', ['shortenedURL' => $shortenedURL->shortened]) }}</a>
    </td>
    <td class="px-6 py-4">
        <p class="font-medium text-blue-600 dark:text-blue-500">{{ $shortenedURL->clicks }}</p>
    </td>
    <td class="px-6 py-4">
        {{ $shortenedURL->created_at }}
    </td>
  
</tr>
