<?php


namespace App\View\Components;


use Illuminate\View\Component;

class Navbar extends Component
{

    public function render()
    {
        return view('components.navbar', [
            'items' => $this->navItems()
        ]);
    }

    private function navItems()
    {
        return [
            ['Tweezer'],
            ['Home', 'home.index'],
            ['Explore', 'explore.index'],
            ['Notifications'],
            ['Messages'],
            ['Bookmarks'],
            ['Lists'],
            ['Profile'],
            ['More'],
        ];
    }
}
