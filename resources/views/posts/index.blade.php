<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Redis Blog</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        .post-card { border: 1px solid #ddd; border-radius: 8px; padding: 20px; margin-bottom: 20px; }
        .post-card h2 a { text-decoration: none; color: #2d3748; }
        .meta { color: #888; font-size: 14px; margin-top: 8px; }
    </style>
</head>
<body>
    <h1>📝 Laravel Redis Blog</h1>

    @foreach($posts as $post)
        <div class="post-card">
            <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
            <div class="meta">
                ✍️ {{ $post->author  }} &nbsp;|&nbsp; 👁️ {{ $post->views }} views
            </div>
        </div>
    @endforeach
</body>
</html>
