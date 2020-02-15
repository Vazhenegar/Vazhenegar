<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    
    <?php echo $__env->make('auth.DashboardLayout.DashboardCoreCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">

<?php if(auth()->guard()->guest()): ?>
    
    <?php
        return redirect()->route('login');
    ?>

<?php else: ?>

    <div class="wrapper">

        

        <?php echo $__env->make('vazhenegar.DashboardTopBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        <?php echo $__env->make('vazhenegar.DashboardRightSideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        <?php echo $__env->make('vazhenegar.DashboardLeftSideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <?php $__env->startSection('content'); ?>
                <?php echo $__env->yieldSection(); ?>
            </section>
        </div>
    </div>
<?php endif; ?>
<?php echo $__env->make('scripts.DashboardCoreScripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('scripts.DashboardBadgesAndMenusQuantification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\auth\DashboardLayout\DashboardMasterLayout.blade.php ENDPATH**/ ?>