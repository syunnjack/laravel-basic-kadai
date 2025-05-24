<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \DB::table('posts')->get(); // クエリビルダ
    return view('posts.index', ['posts' => $posts]);
    }
}
