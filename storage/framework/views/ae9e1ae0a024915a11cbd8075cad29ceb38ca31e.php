<?php $__env->startSection('pageTitle' , 'مدیریت بخش سوالات متداول'); ?>
<?php $__env->startSection('content'); ?>
    <h3>لیست سوالات متداول سایت</h3>
    <div>
        <table>
            <thead>
            <tr>
                <td>ردیف</td>
                <td>عنوان سوال</td>
                <td>نمایش و ویرایش</td>
                <td>حذف</td>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="/faq/<?php echo e($faq->id); ?>" method="post">
                    <?php echo e(method_field('DELETE')); ?>

                <tr>
                    <td><?php echo e($faq->id); ?></td>
                    <td><?php echo e($faq->q); ?></td>
                    <td><a href="/faq/<?php echo e($faq->id); ?>"> نمایش و ویرایش</a></td>
                    <td><button type="submit" >حذف</button> </td>
                </tr>
                </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
    <hr>
    <section title="addNewFaq">
        <form action="/faq" method="post">
            <h2>افزودن سوالات متداول جدید</h2><br>
            <label>سوال
                <input type="text" name="q">
            </label>
            <br>
            <label>پاسخ
                <textarea name="a"></textarea>
            </label>
            <br>
            <button type="submit">ثبت</button>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('faq::faqNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\faqAdmin.blade.php ENDPATH**/ ?>