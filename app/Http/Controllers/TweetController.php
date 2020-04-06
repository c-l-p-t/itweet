<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Contracts\Support\Renderable;

class TweetController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attribute = request()->validate([
            'body' => ['required', 'max:255']
        ]);
        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $attribute['body']
        ]);

        return redirect('/home');
    }
}
