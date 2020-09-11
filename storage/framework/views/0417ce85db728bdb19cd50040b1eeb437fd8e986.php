<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ترجمه تخصصی متون و مقالات">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('PageTitle'); ?></title>

    
    <?php echo $__env->make('vazhenegar.MainLayout.CoreCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

<?php echo $__env->make('vazhenegar.MainLayout.PageStaticElements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Preloader goes here -->
<?php $__env->startSection('preloader'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- ***** Header And Nav Area ***** -->
<?php $__env->startSection('HeaderAndNav'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- ***** ›Content Area, will vary depends on the page that user visits ***** -->
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- ***** Footer Area ***** -->
<?php $__env->startSection('Footer'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- ***** Script Area ***** -->
<?php echo $__env->make('scripts.CoreScripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\MainLayout\MasterLayout.blade.php ENDPATH**/ ?>