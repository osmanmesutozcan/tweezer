<x-turbo-frame id="tweet-trending">
    <x-home.right-container title="Trends for you">
        @foreach($trends as $trend)
            <div class="p-3 pt-2 border-b border-gray-700 cursor-pointer hover:bg-gray-700">
                <p class="text-gray-500 text-sm">Trending in Turkey</p>
                <p class="font-black text-sm">#{{ $trend }}</p>
                <p class="text-gray-500 text-sm">{{ random_int(1,100) }}.{{ random_int(0, 9) }}k tweets</p>
            </div>
        @endforeach
    </x-home.right-container>
</x-turbo-frame>
