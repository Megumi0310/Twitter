<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
  //
  public function store(Request $request)
  {
    dd($request->tweet_id);

    $like = new Like();
    $like->tweet_id = $request->tweet_id;
    $like->user = Auth::user()->id;
    $like->save();

    return redirect('/timeline');
  }
}
