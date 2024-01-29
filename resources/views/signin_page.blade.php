<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="signin-form" >
            <h2>Creator</h2>
            <x-signin componentName="creatorSignin" />
        </div>
        <div class="signin-form">
            <h2>User</h2>
            <x-signin componentName="userSignin" />
        </div>
    </div>
</body>
</html>