<div
    x-data="{show: false}"
    x-init="setTimeout(() => { show= true }, 150)"
    x-show="show"
    class="overflow-hidden rounded-xl bg-gray-800"
    {{ $attributes }}>

    @if(!isset($isPlaceholder))
        <div class="p-3 pt-2 bg-gray-800 border-b border-gray-700 flex items-center">
            <h3 class="font-black text-xl">{{ $title }}</h3>
        </div>
    @endif

    {{ $slot }}

    @if(!isset($isPlaceholder))
        <div class="p-3 pt-2">
            <p class="text-blue-500 text-sm hover:underline cursor-pointer">Show more...</p>
        </div>
    @endif
</div>
