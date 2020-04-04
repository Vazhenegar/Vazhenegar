<?php $__env->startSection('pageTitle', 'ویرایش سوالات متداول'); ?>

<?php $__env->startSection('content'); ?>
    <form method="post" action="/contact-us/<?php echo e($ContactUs->id); ?>">
        <?php echo e(method_field('PATCH')); ?>

        <label>عنوان
            <input type="text" name="title" value="<?php echo e($ContactUs->title); ?>">
        </label>
        <br>
        <label>متن
            <textarea name="body"><?php echo e($ContactUs->body); ?></textarea>
        </label>
        <br>
        <button type="submit">ویرایش</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ContactUs::contact-usNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\contact-usEdit.blade.php ENDPATH**/ ?>