@props([
    'color' => 'blue-400'
])

<div {{ $attributes->merge([ 'class' => 'p-2 hover:bg-'. $color .' hover:text-'. $color .' hover:bg-opacity-10 text-gray-400 transition-colors rounded-full flex items-center justify-center float-left cursor-pointer' ]) }}>
    {{ $slot }}
</div>
