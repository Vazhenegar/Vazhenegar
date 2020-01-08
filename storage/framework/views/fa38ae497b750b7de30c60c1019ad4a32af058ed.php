<?php $__env->startSection('pageTitle', 'ویرایش سوالات متداول'); ?>

<?php $__env->startSection('content'); ?>
    <form   method="post" action="/faq/<?php echo e($faq->id); ?>" >
        <?php echo e(method_field('PATCH')); ?>

        <label>سوال
            <input type="text" name='q' value="<?php echo e($faq->q); ?>">
        </label>
        <br>
        <label>پاسخ
            <textarea name="a"><?php echo e($faq->a); ?></textarea>
        </label>
        <br>
        <button type="submit">ویرایش</button>
    </form>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('faq::faqNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\faqEdit.blade.php ENDPATH**/ ?>