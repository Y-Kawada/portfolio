<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function showTimelinePage()
    {
        $tweets = Tweet::orderBy('created_at', 'desc')->get();
        return view('timeline', compact('tweets'));
    }

    public function postTweet(Request $request)
    {
        $request->validate([
            'tweet' => 'required|max:140',
        ]);

        $request->session()->regenerateToken();

        Tweet::create([
            'user_id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'tweet' => $request->tweet,
        ]);

        return back();
    }

    public function postComment(Request $request) {
        $request->validate([
            'comment' => 'required|max:140',
        ]);
        $request->session()->regenerateToken();

        Comment::create([
            'tweet_id' => $request->tweet_id,
            'user_id' =>  Auth::user()->id,
            'comment' => $request->comment,
        ]);

        return back();
    }
}
