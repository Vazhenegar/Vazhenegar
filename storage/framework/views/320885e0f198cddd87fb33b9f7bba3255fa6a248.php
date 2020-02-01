
<!-- Calendar -->
<div class="box box-solid bg-green-gradient">
    <div class="box-header">
        <i class="fa fa-calendar"></i>

        <h3 class="box-title">تقویم</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <!--The calendar -->
        <div id="DashboardCalendar">
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<?php echo $__env->make('scripts.CoreScripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('scripts.DatePicker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardCalendar.blade.php ENDPATH**/ ?>