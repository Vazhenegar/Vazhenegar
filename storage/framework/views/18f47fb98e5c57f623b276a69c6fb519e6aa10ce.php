<?php $__env->startSection('Title', 'لیست سفارشات جدید'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('vazhenegar.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('vazhenegar.DashboardAdminBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php (session(['OrderList'=>'NewOrders'])); ?>
    <?php echo $__env->make('vazhenegar.DashboardOrdersList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardAdminNewOrders.blade.php ENDPATH**/ ?>