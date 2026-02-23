<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        $posts = Cache::remember('posts.all', 600, function () {
            return Post::where('published', true)
                       ->orderBy('created_at', 'desc')
                       ->get(['id', 'title', 'slug', 'published', 'excerpt', 'author', 'views', 'created_at']);
        });

        return view('posts.index', compact('posts'));
    }

     public function show(string $slug)
    {
        $post = Cache::remember("posts.{$slug}", 600, function () use ($slug) {
            return Post::where('slug', $slug)
                       ->where('published', true)
                       ->firstOrFail();
        });

        $viewKey = "post.views.{$slug}";

        if (!Cache::has($viewKey)) {
            Cache::put($viewKey, 1);
        } else {
            Cache::increment($viewKey);
        }

        $views = Cache::get($viewKey, 0);

        return view('posts.show', compact('post', 'views'));
    }
}
