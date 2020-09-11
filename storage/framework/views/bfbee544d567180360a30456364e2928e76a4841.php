<?php $__env->startSection('PageTitle', 'سوالات متداول'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<?php echo $__env->make('vazhenegar.SharedParts.PageHeadSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ***** Breadcrumb Area End ***** -->

<?php echo $__env->make('vazhenegar.FaqElements.BodySection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Faq Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.SharedParts.MainLayout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\faq.blade.php ENDPATH**/ ?>