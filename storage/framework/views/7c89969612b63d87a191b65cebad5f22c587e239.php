

<?php echo $__env->make('vazhenegar.DashboardAdminBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php (session(['OrderList'=>'AllOrders','UserRole'=>DashboardCurrentUser::$Role])); ?>
<?php echo $__env->make('vazhenegar.DashboardList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        <?php echo $__env->make('vazhenegar.DashboardCharts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('vazhenegar.DashboardEmailWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        <?php echo $__env->make('vazhenegar.DashboardCalendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('vazhenegar.DashboardChatBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- left col -->

</div>

<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardAdminIndex.blade.php ENDPATH**/ ?>