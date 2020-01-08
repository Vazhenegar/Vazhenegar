<?php $__env->startSection('pageTitle', 'مشاهده و ویرایش تماس با ما'); ?>

<?php $__env->startSection('content'); ?>
    <form action="/contact-us/<?php echo e($ContactUs->id); ?>/edit" method="get">
        <h3>
            <?php echo e($ContactUs->title); ?>

            <button type="submit" >ویرایش</button>
        </h3>
        <p>
            <?php echo e($ContactUs->body); ?>

        </p>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('ContactUs::contact-usNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\contact-usShow.blade.php ENDPATH**/ ?>