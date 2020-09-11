<?php $__env->startSection('PageTitle', 'استخدام مترجم'); ?>

<?php $__env->startSection('content'); ?>

    
    <!-- ***** Breadcrumb Area Start ***** -->
    <?php echo $__env->make('vazhenegar.SharedParts.PageHeadSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ***** Breadcrumb Area End ***** -->

<?php echo $__env->make('vazhenegar.TranslatorEmployment.EmploymentForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ***** employment Area End ***** -->

    
    <?php echo $__env->make('scripts.CoreScripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.DatePicker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.StateCity', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.TranslationFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.TranslationLanguages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.SharedParts.MainLayout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\TranslatorEmployment.blade.php ENDPATH**/ ?>