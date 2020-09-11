<?php $__env->startSection('Title', 'ویرایش مشخصات سفارش'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-7">

            <div class="box box-primary OrderSpecification">
                <div class="box-header">
                    <i class="fa fa-pencil"></i>
                    <h3 class="box-title">ویرایش مشخصات سفارش</h3>
                </div>

                <div class="box-body">
                    <form action="/dashboard/Order/<?php echo e($Order->id); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PATCH')); ?>



                        
                        <div class="form-group">
                            شماره سفارش:<?php echo e($Order->id); ?>

                        </div>

                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="OrderSubject" placeholder="موضوع" value="<?php echo e($Order->OrderSubject); ?>" required>
                        </div>

                        
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">توضیحات</h3>
                            </div>
                            <textarea class="textarea" name="Description"
                                      placeholder="مواردی مانند گرایش، صفحات، و توضیحاتی که فکر می کنید به ترجمه راحتتر و بهتر مترجم کمک می کند را اینجا بنویسید"><?php echo e($Order->Description); ?></textarea>
                        </div>
                        

                        <div class="box-footer clearfix">
                            <button type="submit" class="pull-left btn btn-default">ثبت تغییرات
                                <i class="fa fa-arrow-circle-left"></i></button>
                        </div>
                        

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>


            </div>

        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5">
            <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCalendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <!-- left col -->

    </div>

    
    <?php echo $__env->make('scripts.DatePicker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\Admin\DashboardAdminOrderEdit.blade.php ENDPATH**/ ?>