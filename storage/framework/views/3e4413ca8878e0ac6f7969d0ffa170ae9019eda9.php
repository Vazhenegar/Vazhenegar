<?php $__env->startSection('PageTitle', 'قوانین و مقررات'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<?php (session(['PageTitle'=>'TOS'])); ?>
<?php echo $__env->make('vazhenegar.SharedParts.PageHeadSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Breadcrumb Area End ***** -->
<div class="mb-60"></div>
<!-- ***** Terms of service body section starts ***** -->
<?php echo $__env->make('vazhenegar.TermsOfService.BodySection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Terms of service body section End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.MainLayout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/terms-of-service.blade.php ENDPATH**/ ?>