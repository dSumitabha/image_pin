<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <title>Feed</title>
    <link 
</head>
<body>
<div class="posts-container">
    <div class="card" >
        <h3 class="creator-name">seascape</h3>
        <img class="post-img" src="<?php echo e(asset('images/seascape1.jpg')); ?>" alt="image posted by" />
        <p class="caption">This is a caption</p>
        <p class="likes"><span>10</span> likes </p>
    </div>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <h3 class="creator-name"><?php echo e($post->creator); ?></h3>
        <img class="post-img" src="<?php echo e(asset('storage/' . $post->image_path)); ?>" alt="image posted by" />
        <p class="caption"><?php echo e($post->caption); ?></p>
        <p class="likes"><span><?php echo e($post->likes); ?></span> likes</p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\first\resources\views/feed.blade.php ENDPATH**/ ?>