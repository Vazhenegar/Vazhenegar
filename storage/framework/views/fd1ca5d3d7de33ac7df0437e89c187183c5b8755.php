


<?php echo $__env->make('vazhenegar.DashboardAdminOrdersList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardChatBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCalendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- left col -->

</div>
<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\Translator\DashboardTranslatorIndex.blade.php ENDPATH**/ ?>