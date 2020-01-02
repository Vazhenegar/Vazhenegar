<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo e(config('app.name')); ?>- پنل <?php echo $__env->yieldContent('Role'); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    
    <?php echo $__env->make('auth.DashboardLayout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

<?php if(auth()->guard()->guest()): ?>
    
    
    
    
    
    
    
    
    <?php
        return redirect()->route('login');
    ?>
<?php else: ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>

<?php endif; ?>


</body>
</html>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\auth\DashboardLayout\DashboardMasterLayout.blade.php ENDPATH**/ ?>