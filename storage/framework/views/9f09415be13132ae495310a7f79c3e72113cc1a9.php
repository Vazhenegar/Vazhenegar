<form action="/dashboard/Order/<?php echo e($Order->id); ?>" method="post" id="NewOrderSpecAdmin">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>

    <table class="table">
        <thead>بخش مدیر</thead>
        <tbody>

        
        <tr>
            <td class="pull-right">
                نام مشتری:
                 <?php echo e($RelatedCustomer->FirstName . ' ' . $RelatedCustomer->LastName); ?>

            </td>
            &nbsp;
            <td class="pull-right">
                تلفن همراه: <?php echo e($RelatedCustomer->MobileNumber); ?>

            </td>
            &nbsp;
            <td class="pull-right">
                تلفن ثابت: <?php echo e($RelatedCustomer->FixNumber); ?>

            </td>
        </tr>

        
        <tr>
            <td class="pull-left">
                <a href="<?php echo e($Order->id); ?>/edit">
                    <button type="button" class="btn btn-block"><i class="fa fa-pencil"></i>
                        ویرایش مشخصات فایل
                    </button>
                </a>
            </td>
        </tr>

        
        <tr>
            <td>وضعیت
                سفارش:&nbsp; <?php echo e(\App\OrderStatus::where('id',$Order->status_id)->value('Status')); ?>

                &nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        
        <tr class="OrderPrice">
            <td class="pull-right">
                تعداد کلمات: &nbsp;
                <input type="text" class="pull-right form-control" name="WordCount" required>
            </td>

            
            <td class="pull-right">
                مبلغ کل: &nbsp;
                <input type="text" class="pull-right form-control" name="TotalPrice" required>
            </td>

            
            <td class="pull-left submit">
                <button type="submit" class="btn btn-default">بروز رسانی
                    <i class="fa fa-arrow-circle-left"></i></button>
            </td>
        </tr>
        
        <tr>
            <td class="Translators">
                <span>ارسال به مترجم: &nbsp;</span>

                <select class="form-control" name="TranslatorsList" required>
                    <option value="0">تمام مترجمان در زمینه و زبان یکسان</option>
                    <?php $__currentLoopData = $TranslatorsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                            value=" <?php echo e($value['id']); ?>"><?php echo e($value['FirstName']. ' '. $value['LastName']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </td>

            <td class="pull-left">
                <button type="button" class="btn btn-default">تایید
                    <i class="fa fa-check"></i></button>
            </td>
        </tr>

        </tbody>
    </table>
</form>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardAdminNewOrderSpec.blade.php ENDPATH**/ ?>