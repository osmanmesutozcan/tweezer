<x-app-layout>
    <x-slot name="contentHead">
        <input placeholder="Search" class="h-8 rounded-full bg-gray-800 w-full py-2 px-4 focus:outline-none">

        <x-button.pseudo>
            <x-icon.setting class="h-6 w-6 text-blue-400" />
        </x-button.pseudo>
    </x-slot>

    <x-slot name="content">
        <div class="w-full h-screen overflow-y-scroll pt-12 x-40">
            YO
        </div>
    </x-slot>

    <x-slot name="right">
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
