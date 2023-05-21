<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
  //
  public function store(Request $request)
  {
    dd($request->tweet_id);

    $like = new Like();
    $like->tweet_id = 1;
    $like->user = 1;
    $like->save();

    return redirect('/timeline');
  }
}
