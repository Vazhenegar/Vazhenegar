<?php $__env->startSection('PageTitle', 'سوالات متداول'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <h1 class="title">سوالات متداول</h1>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<section class="Faq-area section-padding-80">
    <div class="container" dir="rtl">
        <div class="row justify-content-between">
            <!-- Contact Form -->
            <div class="col-12 col-lg-8">
                
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Border Bottom -->
                <div class="border-line"></div>
                <br>
                <p class="static-text-title"><?php echo e($faq->q); ?></p>
                <p class="static-text-content"> <?php echo e($faq->a); ?></p>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
            </div>
        </div>
    </div>
</section>
<!-- ***** Faq Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\/views/vazhenegar/faq.blade.php ENDPATH**/ ?>