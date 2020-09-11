

<?php echo $__env->make('vazhenegar.DashboardElements.Admin.DashboardAdminBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php (session(['List'=>'AllOrders','UserRole'=>DashboardCurrentUser::$Role])); ?>

<?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCharts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardEmailWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCalendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardChatBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- left col -->

</div>

<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\Admin\DashboardAdminIndex.blade.php ENDPATH**/ ?>