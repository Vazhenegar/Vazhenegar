<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body dir="rtl">
<nav>
<?php $__env->startSection('nav'); ?>
    <a href="/">صفحه اصلی</a>
    &nbsp; &nbsp;
<?php echo $__env->yieldSection(); ?>
</nav>
<h1>
    <?php echo $__env->yieldContent('pageTitle'); ?>
</h1>
<article>
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>
</article>
</body>
</html>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\MainLayout\StaticPagesLayout.blade.php ENDPATH**/ ?>