<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>投稿一覧</title>
</head>
<body>
  <h1>投稿一覧</h1>
  <ul>
    @foreach ($posts as $post)
      <li>
        <strong>{{ $post->title }}</strong><br>
        {{ $post->content }}
      </li>
    @endforeach
  </ul>
</body>
</html>
