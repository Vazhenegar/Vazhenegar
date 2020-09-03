<?php $__env->startSection('pageTitle', 'مشاهده و ویرایش سوالات متداول'); ?>

<?php $__env->startSection('content'); ?>
    <form action="/faq/<?php echo e($faq->id); ?>/edit" method="get">
<h3>
<?php echo e($faq->q); ?>

    <button type="submit" value="submit">ویرایش</button>
</h3>
    <p>
<?php echo e($faq->a); ?>

    </p>
    </form>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('faq::faqNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\faqShow.blade.php ENDPATH**/ ?>