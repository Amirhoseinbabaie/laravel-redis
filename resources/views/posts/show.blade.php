<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }}</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        .meta { color: #888; font-size: 14px; margin-bottom: 20px; }
        a { color: #4a90e2; }
    </style>
</head>
<body>
    <a href="{{ route('posts.index') }}">← Back to posts</a>

    <h1>{{ $post->title }}</h1>
    <div class="meta">✍️ {{ $post->author }} &nbsp;|&nbsp; 👁️ {{ $views }} views</div>

    <p>{{ $post->body }}</p>
</body>
</html>
