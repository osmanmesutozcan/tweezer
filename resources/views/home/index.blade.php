<x-app-layout>
    <x-slot name="contentHead">
        <h2 class="font-black text-lg">Home</h2>
    </x-slot>

    <x-slot name="content">
        @include('tweet.create')

        <div class="w-full h-2 bg-gray-800"></div>

        <x-turbo-frame id="tweet-list" :src="route('tweet.index')">
            <div
                x-data="{show: false}"
                x-init="setTimeout(() => { show= true }, 150)"
                x-show="show"
                class="h-64 flex justify-center items-center">
                <x-icon.loading class="h-8 w-8 animate-spin text-white" />
            </div>
        </x-turbo-frame>
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

        <div class="w-full">
            <x-turbo-frame id="tweet-who" :src="route('home.who-follow')">
                <x-home.right-container isPlaceholder="true">
                    <div class="h-32 flex justify-center items-center w-full">
                        <x-icon.loading class="h-8 w-8 animate-spin text-white" />
                    </div>
                </x-home.right-container>
            </x-turbo-frame>
        </div>
    </x-slot>
</x-app-layout>


