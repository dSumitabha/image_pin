<form action="<?php echo e($action); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="username" placeholder="username" />
    <input type="password" name="password"placeholder="password"/>
    <input type="submit" value="Sign In" />
</form><?php /**PATH C:\xampp\htdocs\first\resources\views/components/signin.blade.php ENDPATH**/ ?>