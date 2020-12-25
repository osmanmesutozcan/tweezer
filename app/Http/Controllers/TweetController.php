<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweet.index', [
            'tweets' => Tweet::all()
        ]);
    }

    public function create()
    {
        return view('tweet.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('tweet.create');
    }
}
