<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>投稿作成</title>
</head>
<body>
  <h1>投稿作成</h1>

  {{-- エラーメッセージ表示 --}}
  @if ($errors->any())
    <ul style="color: red;">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  {{-- フォーム --}}
  <form action="{{url('/posts/store')}}" method="POST">
    @csrf
    <label>タイトル（最大20文字）</label><br>
    <input type="text" name="title" value="{{ old('title') }}"><br><br>

    <label>本文（最大200文字）</label><br>
    <textarea name="content">{{ old('content') }}</textarea><br><br>

    <button type="submit">投稿</button>
  </form>
</body>
</html>
