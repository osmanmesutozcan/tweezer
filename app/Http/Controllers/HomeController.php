<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public ?\Faker\Generator $faker = null;

    public function __construct()
    {
        $this->faker = (new \Faker\Factory())->create();
    }

    public function index()
    {
        return view('home.index');
    }

    public function explore()
    {
        return view('explore.index');
    }

    public function notifications()
    {
        return view('explore.index');
    }

    public function trending()
    {
        $trends = array_map(fn() => join('.', $this->faker->words(2)), range(0, 4));

        return view('home.trending', [
            'trends' => $trends
        ]);
    }

    public function whoFollow()
    {
        return view('home.who-follow');
    }
}
