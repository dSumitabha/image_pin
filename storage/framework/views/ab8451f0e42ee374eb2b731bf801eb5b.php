<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>"> 
    <title>SignUp Page</title>
</head>
<body>
<div class="container">
        <div class="signin-form" >
            <h2>Creator Signup</h2>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" name="username" placeholder="username" />
                <input type="password" name="password"placeholder="password"/>
                <input type="submit" value="Sign Up" />
            </form>
        </div>
        <div class="signin-form">
            <h2>User SignUP</h2>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" name="username" placeholder="username" />
                <input type="password" name="password"placeholder="password"/>
                <input type="submit" value="Sign Up" />
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\first\resources\views/signup.blade.php ENDPATH**/ ?>