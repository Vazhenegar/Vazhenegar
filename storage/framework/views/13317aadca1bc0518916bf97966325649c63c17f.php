<?php $__env->startSection('content'); ?>

<?php echo $__env->make('vazhenegar.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php switch(DashboardCurrentUser::$CurrentUser->role()->value('id')):
        
        case (1): ?>
            <?php $__env->startSection('Title', ' پنل '.DashboardCurrentUser::$Role); ?>
            <?php echo $__env->make('vazhenegar.DashboardAdminIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>

        <?php case (5): ?>
            <?php $__env->startSection('Title', ' پنل '.DashboardCurrentUser::$Role); ?>
            <?php echo $__env->make('vazhenegar.DashboardTranslatorIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>

        <?php case (11): ?>
            <?php $__env->startSection('Title', ' پنل '.DashboardCurrentUser::$Role); ?>
            <?php echo $__env->make('vazhenegar.DashboardCustomerIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>
<?php endswitch; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/Dashboard.blade.php ENDPATH**/ ?>