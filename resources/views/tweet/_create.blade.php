<x-turbo-frame id="tweet-create">
    <div x-data="{ disabled: true }" class="border-b border-gray-700 p-2 px-4 transition-colors duration-300">
        <div class="flex space-x-2 w-full">
            <div class="h-12 w-12 rounded-full bg-gray-500"></div>

            <form action="{{ route('tweet.store') }}" method="POST" class="flex-1">
                @csrf

                <div class="h-12 flex items-center w-full">
                    <label for="tweet-compose" class="hidden">Tweet</label>

                    <input
                        x-ref="input"
                        @input="disabled = !$refs.input.value"
                        id="tweet-compose"
                        name="tweet"
                        class="bg-transparent placeholder-gray-400 text-lg py-2 focus:outline-none border-none w-full"
                        placeholder="What's happening?"
                        autocomplete="off"
                    >
                </div>

                <div class="flex justify-between mt-3">
                    <div class="space-x-4 -ml-2">
                        <x-button.pseudo>
                            <x-icon.image class="h-5 w-5 text-blue-400" />
                        </x-button.pseudo>

                        <x-button.pseudo>
                            <x-icon.poll class="h-5 w-5 text-blue-400" />
                        </x-button.pseudo>

                        <x-button.pseudo>
                            <x-icon.smile class="h-5 w-5 text-blue-400" />
                        </x-button.pseudo>

                        <x-button.pseudo>
                            <x-icon.calendar class="h-5 w-5 text-blue-400" />
                        </x-button.pseudo>
                    </div>

                    <button
                        type="submit"
                        x-bind:disabled="disabled"
                        x-bind:class="{ 'opacity-100': !disabled, 'opacity-60 cursor-not-allowed': disabled }"
                        class="px-4 rounded-full font-bold bg-blue-400 focus:outline-none h-9"
                    >Tweet
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-turbo-frame>
