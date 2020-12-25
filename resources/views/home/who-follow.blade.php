<x-turbo-frame id="tweet-who">
    <x-home.right-container title="Who to follow">
        @foreach(range(0,1) as $i)
            <div class="p-3 pt-2 border-b border-gray-700 cursor-pointer hover:bg-gray-700">
                <p class="text-gray-500 text-sm">Trending in Turkey</p>
                <p class="font-black text-sm">#TurboLaravel</p>
                <p class="text-gray-500 text-sm">13.8k tweets</p>
            </div>
        @endforeach
    </x-home.right-container>
</x-turbo-frame>
