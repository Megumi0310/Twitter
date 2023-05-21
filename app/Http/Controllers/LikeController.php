<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
  //
  public function store(Request $request)
  {
    // dd($request->tweet_id);

    $like = new Like();
    $like->tweet_id = $request->tweet_id;
    $like->user_id = Auth::user()->id;
    $like->save();

    return redirect('/timeline');
  }

//※
  public function destroy($id)
  {
    $like = Like::find($id);
    $like->delete();

    return redirect('/timeline');
  
  }

}
