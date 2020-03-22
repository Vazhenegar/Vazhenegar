<?php $__env->startSection('PageTitle', 'قوانین و مقررات'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <h1 class="title">قوانین و مقررات همکاری با مجموعه واژه نگار</h1>
            </div>
        </div>
    </div>
    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->
<div class="mb-60"></div>
<!-- ***** Why Choose Us Area Start ***** -->
<section class="uza-why-choose-us-area" dir="rtl">
    <div class="container">
        <div class="row align-items-center">
            <!-- Choose Us Content -->
            <div class="col-lg-12 ">
                <div class="choose-us-content">
                    <?php $__currentLoopData = $TOS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="static-text-title"><?php echo e($tos->TosTitle); ?></p>
                    <p class="static-text-content"><?php echo e($tos->TosContent); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Why Choose Us Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\terms-of-service.blade.php ENDPATH**/ ?>