<?php


namespace Osmeoz\TurboLaravel\Components;


use Illuminate\View\Component;

class Frame extends Component
{

    public ?string $id = null;
    public ?string $src = null;

    public function __construct($id = null, $src = null)
    {
        $this->id = $id ?? $this->attributes->get('id');
        $this->src = $src ?? optional($this->attributes)->get('src');
    }

    public function render(): string
    {
        return <<<'blade'
        <turbo-frame id="{{ $id }}" {{ isset($src) ? 'src=' . $src : '' }}>
        {{ $slot }}
        </turbo-frame>
        blade;

    }
}
