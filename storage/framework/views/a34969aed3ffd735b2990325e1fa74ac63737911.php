

    <?php echo $__env->make('vazhenegar.OrdersList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-7 connectedSortable">
            <?php echo $__env->make('vazhenegar.Charts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('vazhenegar.DashboardEmailWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
            <?php echo $__env->make('vazhenegar.DashboardCalendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('vazhenegar.ChatBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <!-- left col -->

    </div>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardAdminContent.blade.php ENDPATH**/ ?>