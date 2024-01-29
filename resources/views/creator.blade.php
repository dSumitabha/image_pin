<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creator Dashboard</title>
</head>
<body>
<!--    <x-navbar></x-navbar> -->
    <div class="upload-form">
        <form action="savepost" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="new_image" > 
                <input type="file" name="new_image" id="new_image" class="file-input" accept="image/*">
            </label>
            <input type="text" name="caption" placeholder="Write a caption...">
            <input type="text" name="creator" placeholder="creator name" >
            <input type="submit" value="Post" />
        </form>
    </div>
<!--    <div class="posts-container">
        <div class="card" >
            <img class="post-img" src="{{ asset('images/seascape1.jpg') }}" alt="image posted by" />
            <p class="caption">This is a caption</p>
            <p class="likes"> 10 likes </p>
            <a class="anchor-button" href=""> Update </a>
            <a class="anchor-button" href=""> Delete </a>
        </div>
    </div>
-->
</body>
</html>