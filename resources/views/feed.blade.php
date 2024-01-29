<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Feed</title>
    <link 
</head>
<body>
<div class="posts-container">
    <div class="card" >
        <h3 class="creator-name">seascape</h3>
        <img class="post-img" src="{{ asset('images/seascape1.jpg') }}" alt="image posted by" />
        <p class="caption">This is a caption</p>
        <p class="likes"><span>10</span> likes </p>
    </div>

    @foreach ($posts as $post)
    <div class="card">
        <h3 class="creator-name">{{ $post->creator }}</h3>
        <img class="post-img" src="{{ asset('storage/' . $post->image_path) }}" alt="image posted by" />
        <p class="caption">{{ $post->caption }}</p>
        <p class="likes"><span>{{ $post->likes }}</span> likes</p>
    </div>
@endforeach
</body>
</html>