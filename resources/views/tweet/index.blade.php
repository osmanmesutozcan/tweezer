<x-turbo-frame id="tweet-list">
    <div class="border-b border-gray-700">

        @foreach($tweets as $tweet)
            <div class="border-t border-gray-700 p-2 px-4 hover:bg-gray-800 transition-colors duration-300 cursor-pointer">
                <div class="flex space-x-2 w-full">
                    <img class="h-12 w-12 rounded-full bg-gray-500" src="{{ $tweet->user_avatar }}"  alt="Avatar"/>

                    <div class="w-full">
                        <div class="space-x-2 flex items-center text-sm">
                            <h3 class="font-bold">{{ $tweet->user_name }}</h3>
                            <p class="text-gray-400">{{ '@' . $tweet->user_handle }}</p>
                            <p class="text-gray-400">10m</p>
                        </div>

                        <div>
                            <p class="font-medium text-sm">{{ $tweet->text }}</p>
                        </div>

                        <div class="flex justify-between mt-1 -ml-2">
                            <x-button.pseudo>
                                <x-icon.refresh class="h-5 w-5" />
                            </x-button.pseudo>

                            <x-button.pseudo color="green-400">
                                <x-icon.comment class="h-5 w-5" />
                            </x-button.pseudo>

                            <x-button.pseudo color="red-400">
                                <x-icon.like class="h-5 w-5" />
                            </x-button.pseudo>

                            <x-button.pseudo>
                                <x-icon.upload class="h-5 w-5" />
                            </x-button.pseudo>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-turbo-frame>
