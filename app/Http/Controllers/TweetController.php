<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tweet;


class TweetController extends Controller
{
	//
	public function showTimelinePage()
	{
		//latest関数：テーブル内のレコードを作成日時の降順で取得する
		$tweets = Tweet::simplepaginate(3);
		// dd($tweets);
		return view('timeline', ['tweets' => $tweets]);

	}


	//formでデータを送信する際は、$requestの中にデータを入れて送信する
	public function postTweet(Request $request)
	{
		// dd($request);
		$validator = $request->validate([
			'tweet' => ['required', 'string', 'max:280'],
		]);

		Tweet::create([
			'user_id' => Auth::user()->id,
			'tweet' => $request->tweet,
		]);

		return back();

	}


	
	public function destroy($id)
	{
		$tweet = Tweet::find($id);
		// dd($tweet);
		$tweet->delete();

		return redirect()->route('timeline');
	}
}
