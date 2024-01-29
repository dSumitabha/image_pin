<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creator Dashboard</title>
</head>
<body>
<!--    <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?> -->
    <div class="upload-form">
        <form action="savepost" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
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
            <img class="post-img" src="<?php echo e(asset('images/seascape1.jpg')); ?>" alt="image posted by" />
            <p class="caption">This is a caption</p>
            <p class="likes"> 10 likes </p>
            <a class="anchor-button" href=""> Update </a>
            <a class="anchor-button" href=""> Delete </a>
        </div>
    </div>
-->
</body>
</html><?php /**PATH C:\xampp\htdocs\first\resources\views/creator.blade.php ENDPATH**/ ?>