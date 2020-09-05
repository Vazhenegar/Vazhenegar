<?php $__env->startSection('PageTitle', 'درباره ما'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<?php (session(['PageTitle'=>'AboutUs'])); ?>
<?php echo $__env->make('vazhenegar.SharedParts.PageHeadSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->

<?php echo $__env->make('vazhenegar.AboutUsElements.IntroductionTabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** About Us Area End ***** -->

<!-- ***** Why Choose Us Area Start ***** -->
<?php echo $__env->make('vazhenegar.AboutUsElements.WhyChooseUsArea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Why Choose Us Area End ***** -->

<br>
<?php echo $__env->make('vazhenegar.AboutUsElements.ClientFeedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Client Feedback Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.MainLayout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/about-us.blade.php ENDPATH**/ ?>