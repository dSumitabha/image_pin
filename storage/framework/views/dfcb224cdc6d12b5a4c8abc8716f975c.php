<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>"> 
</head>
<body>

    <div class="container">
        <div class="signin-form" >
            <h2>Creator</h2>
            <?php if (isset($component)) { $__componentOriginalad741d7191511eb0d8bab6dbdbe0174d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d = $attributes; } ?>
<?php $component = App\View\Components\Signin::resolve(['componentName' => 'creatorSignin'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('signin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Signin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d)): ?>
<?php $attributes = $__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d; ?>
<?php unset($__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad741d7191511eb0d8bab6dbdbe0174d)): ?>
<?php $component = $__componentOriginalad741d7191511eb0d8bab6dbdbe0174d; ?>
<?php unset($__componentOriginalad741d7191511eb0d8bab6dbdbe0174d); ?>
<?php endif; ?>
        </div>
        <div class="signin-form">
            <h2>User</h2>
            <?php if (isset($component)) { $__componentOriginalad741d7191511eb0d8bab6dbdbe0174d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d = $attributes; } ?>
<?php $component = App\View\Components\Signin::resolve(['componentName' => 'userSignin'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('signin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Signin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d)): ?>
<?php $attributes = $__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d; ?>
<?php unset($__attributesOriginalad741d7191511eb0d8bab6dbdbe0174d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad741d7191511eb0d8bab6dbdbe0174d)): ?>
<?php $component = $__componentOriginalad741d7191511eb0d8bab6dbdbe0174d; ?>
<?php unset($__componentOriginalad741d7191511eb0d8bab6dbdbe0174d); ?>
<?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\first\resources\views/welcome.blade.php ENDPATH**/ ?>