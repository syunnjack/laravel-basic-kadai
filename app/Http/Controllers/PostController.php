<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get(); // クエリビルダ
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id); // Eloquent ORM
        return view('posts.show', ['post' => $post]);
    }
    public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    // バリデーション
    $request->validate([
        'title' => 'required|max:20',
        'content' => 'required|max:200',
    ]);

    // データ保存
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    // 一覧にリダイレクト
    return redirect('/posts');
}
}
