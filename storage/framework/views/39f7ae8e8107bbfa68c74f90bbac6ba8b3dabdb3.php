<?php $__env->startSection('pageTitle' , 'مدیریت بخش تماس با ما'); ?>
<?php $__env->startSection('content'); ?>
    <h3>لیست بخش تماس با ما</h3>
    <div>
        <table>
            <thead>
            <tr>
                <td>ردیف</td>
                <td>عنوان </td>
                <td>نمایش و ویرایش</td>
                <td>حذف</td>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $ContactUs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="/contact-us/<?php echo e($data->id); ?>" method="post">
                    <?php echo e(method_field('DELETE')); ?>

                    <tr>
                        <td><?php echo e($data->id); ?></td>
                        <td><?php echo e($data->title); ?></td>
                        <td><a href="/contact-us/<?php echo e($data->id); ?>"> نمایش و ویرایش</a></td>
                        <td>
                            <button type="submit">حذف</button>
                        </td>
                    </tr>
                </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <hr>
    <section title="addNewContactUs">
        <form action="/contact-us" method="post">
            <h2>افزودن سوالات متداول جدید</h2><br>
            <label>تیتر
                <input type="text" name="title">
            </label>
            <br>
            <label>متن
                <textarea name="body"></textarea>
            </label>
            <br>
            <button type="submit">ثبت</button>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ContactUs::contact-usNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\contact-usAdmin.blade.php ENDPATH**/ ?>