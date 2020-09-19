

<div>
    <p>
        مشخصات کاربر:<br>
        نام مشتری:

        <?php echo e($RelatedCustomer->FirstName . ' ' . $RelatedCustomer->LastName); ?>

        &nbsp; &nbsp;
        تلفن همراه: <?php echo e($RelatedCustomer->MobileNumber); ?>

        &nbsp; &nbsp;
        تلفن ثابت: <?php echo e($RelatedCustomer->FixNumber); ?>

    </p>
</div>


<div>
    <p>وضعیت
        سفارش:&nbsp; <?php echo e($OrderStatus); ?>

        &nbsp;&nbsp;&nbsp;
    </p>
</div>


<?php switch($Order->status_id):
    
    case (1): ?>
    <form action="<?php echo e(route('Order.update',[$Order->id])); ?>" method="post" id="NewOrderSpecAdmin">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('PATCH')); ?>

        <table class="table">
            <tbody>

            
            <tr>
                <td class="pull-left">
                    <a href="<?php echo e(route('Order.edit',[$Order->id])); ?>">
                        <button type="button" class="btn btn-block"><i class="fa fa-pencil"></i>
                            ویرایش مشخصات فایل
                        </button>
                    </a>
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

            </tbody>
        </table>
    </form>
    <?php break; ?>
    <?php case (3): ?>
    
    <div>
        مبلغ پرداخت شده: <?php echo e($Order->PaidPrice); ?> تومان
    </div>
    <div>
        شماره تراکنش: <?php echo e($Order->TrackingCode); ?>

    </div>
    <div>

        <a onclick="event.preventDefault();
            document.getElementById('invoice-acceptance').submit();">

            <button type="button" class="btn btn-block"><i class="fa fa-dollar"></i>
                تایید دریافت مبلغ
            </button>
        </a>
        <form id="invoice-acceptance" action="<?php echo e(route('InvoiceAcceptance',['order_id'=>$Order->id])); ?>" method="POST"
              style="display: none;">
            <?php echo csrf_field(); ?>
        </form>

    </div>
    <?php break; ?>

    <?php case (4): ?>
    
    <div class="Translators">
            <span>ارسال به مترجم: &nbsp;</span>

            <select class="form-control TranslatorsList" name="TranslatorsList" required>
                <option value="0">تمام مترجمان در زمینه و زبان یکسان</option>
                <?php $__currentLoopData = $TranslatorsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option
                        value=" <?php echo e($value['id']); ?>"><?php echo e($value['FirstName']. ' '. $value['LastName']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        <br>
        <a>
            <button type="button" class="btn btn-default">تایید
                <i class="fa fa-check"></i></button>
        </a>
    </div>
    <?php break; ?>

<?php endswitch; ?>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardElements/Admin/DashboardNewOrderSpecsAdmin.blade.php ENDPATH**/ ?>