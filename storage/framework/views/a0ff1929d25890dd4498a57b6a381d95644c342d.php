<?php $__env->startSection('PageTitle', 'تماس با ما'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<?php echo $__env->make('vazhenegar.SharedParts.PageHeadSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Breadcrumb Area End ***** -->

<?php echo $__env->make('vazhenegar.ContactUsElements.ContactForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Contact Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.SharedParts.MainLayout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\contact-us.blade.php ENDPATH**/ ?>