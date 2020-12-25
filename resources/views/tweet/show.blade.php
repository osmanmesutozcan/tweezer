<x-app-layout>
    <x-slot name="contentHead">
        <a href="{{ route('home.index') }}" class="mr-6">
            <x-button.pseudo>
                <x-icon.arrow-left class="w-6 w-6 text-blue-400" />
            </x-button.pseudo>
        </a>

        <h2 class="font-black text-lg">Tweet</h2>
    </x-slot>

    <x-slot name="content">
        <div class="p-2 px-4 transition-colors duration-300 space-y-3">
            <div class="flex space-x-2 w-full">
                <img class="h-12 w-12 rounded-full bg-gray-500" src="{{ $tweet->user_avatar }}" alt="Avatar" />

                <div class="text-lg leading-snug">
                    <p class="font-black">{{ $tweet->user_name }}</p>
                    <p class="text-gray-400">{{ '@' . $tweet->user_handle }}</p>
                </div>
            </div>

            <div class="w-full">
                <p class="font-medium text-lg">{{ $tweet->text }}</p>
            </div>

            <div class="flex text-gray-400 space-x-2 text-sm">
                <p>10:15 PM</p>
                <p>.</p>
                <p>Dec 25, 2020</p>
                <p>.</p>
                <p>Twitter for iPhone</p>
            </div>

            <div class="border-gray-700 border-b">
            </div>

            <div class="flex text-sm space-x-4 text-gray-400">
                <p><span class="font-black text-white">6</span> Retweets</p>
                <p><span class="font-black text-white">85</span> Likes</p>
            </div>

            <div class="border-gray-700 border-b">
            </div>

            <div class="flex justify-between mt-1 -ml-2 px-14">
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
    </x-slot>

    <x-slot name="right">
        <input placeholder="Search" class="rounded-full bg-gray-800 w-full py-2 px-4 focus:outline-none">

        <div class="w-full">
            <x-turbo-frame id="tweet-trending" :src="route('home.trending')">
                <x-home.right-container isPlaceholder="true">
                    <div class="h-32 flex justify-center items-center w-full">
                        <x-icon.loading class="h-8 w-8 animate-spin text-white" />
                    </div>
                </x-home.right-container>
            </x-turbo-frame>
        </div>
    </x-slot>
</x-app-layout>

