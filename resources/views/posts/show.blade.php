<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>投稿詳細</title>
</head>
<body>
  <h1>投稿詳細</h1>

  <ul>
    <li>ID: {{ $post->id }}</li>
    <li>タイトル: {{ $post->title }}</li>
    <li>本文: {{ $post->content }}</li>
    <li>作成日時: {{ $post->created_at }}</li>
    <li>更新日時: {{ $post->updated_at }}</li>
  </ul>

  <a href="/posts">← 一覧に戻る</a>
</body>
</html>
