<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ترجمه تخصصی متون و مقالات">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <?php echo $__env->make('vazhenegar.layout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>
<?php echo $__env->make('vazhenegar.layout.PageStaticElements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!-- Preloader goes here -->
<?php $__env->startSection('preloader'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- ***** Header And Nav Area ***** -->
<?php $__env->startSection('HeaderAndNav'); ?>
<?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- ***** Footer Area ***** -->
<?php $__env->startSection('Footer'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- ***** Script Area ***** -->
<?php echo $__env->make('vazhenegar.layout.Scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/layout/MasterLayout.blade.php ENDPATH**/ ?>