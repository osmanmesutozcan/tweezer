<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweet._index', [
            'tweets' => Tweet::all()
        ]);
    }

    public function show(Tweet $tweet)
    {
        return view('tweet.show', [
            'tweet' => $tweet,
        ]);
    }

    public function create()
    {
        return view('tweet._create');
    }

    public function store(Request $request)
    {
        return redirect()->route('tweet.create');
    }
}
