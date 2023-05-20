<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twitter</title>
  <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
</head>
<body>
  <div class="wrapper">
    <form action="/timeline" method="post">
      @csrf
      <div class="post-box">
        <input type="text" name="tweet" placeholder="今なにしてる？">
        <button type="submit" class="submit-btn">ツイート</button>
      </div>
    </form>

    <div class="tweet-wrapper">
      @foreach ($tweets as $tweet)
      <div class="tweet-box">
        <div>{{ $tweet->tweet }}</div>
       @endforeach

        <div class="destroy-bin">
          <form action="">
            <input type="submit",value="削除">
          </form>


        </div>
    </div>

    <div class="tweet-wrapper">
      <div class="tweet-box" >

      </div>
    </div>
  </div>
</body>
</html>