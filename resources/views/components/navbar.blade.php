<nav class="h-full flex flex-col justify-between">
    <div class="space-y-4 w-full">
        @foreach($items as $item)
            <div class="h-12">
                <div class="h-12 p-4 hover:bg-blue-400 hover:text-blue-400 hover:bg-opacity-10 rounded-full flex items-center justify-center float-left cursor-pointer">
                    <a class="text-xl font-black {{ (count($item) > 1 && request()->routeIs($item[1])) ? 'text-blue-400' : '' }}" href="{{ count($item) > 1 ? route($item[1]) : '#' }}">{{ $item[0] }}</a>
                </div>
            </div>
        @endforeach
    </div>

    <a href="https://twitter.com/osmeoz" target="_blank">
        <div class="pb-6">
            <div class="p-2 flex items-center space-x-2 hover:bg-blue-400 hover:bg-opacity-10 rounded-full cursor-pointer">
                <div class="h-10 w-10 rounded-full bg-gray-200"></div>

                <div>
                    <p class="font-bold text-sm">Osman Mesut Ozcan</p>
                    <p class="text-gray-400 text-sm">@osmeoz</p>
                </div>
            </div>
        </div>
    </a>
</nav>
