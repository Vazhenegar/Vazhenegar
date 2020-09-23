

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


<hr>

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
                    ریال
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
        مبلغ پرداخت شده: <?php echo e($Order->PaidPrice); ?> ریال
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
        <form id="invoice-acceptance" action="<?php echo e(route('InvoiceAcceptance',[$Order->id])); ?>" method="POST"
              style="display: none;">
            <?php echo csrf_field(); ?>
        </form>

    </div>
    <?php break; ?>

    <?php case (4): ?>
    <?php if($Order->ResponsibleUserId): ?>
        <div>
            مشخصات مترجم:
            <br>
            نام مترجم:  <?php echo e($ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName); ?> &nbsp;
            تلفن همراه: <?php echo e($ResponsibleTranslator->MobileNumber); ?> &nbsp;
            تلفن ثابت: <?php echo e($ResponsibleTranslator->FixNumber); ?>


        </div>
    <?php endif; ?>

    <br><br>
    
    <div class="Translators">
            <span>ارسال به مترجم: &nbsp;</span>
        <form action="<?php echo e(route('AssignToTranslator',[$Order->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="pull-right">
            <select class="form-control TranslatorsList" name="MatchedTranslator" required>
                <option value="0">تمام مترجمان در زمینه و زبان یکسان</option>
                <?php $__currentLoopData = $TranslatorsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option
                        value=" <?php echo e($value['id']); ?>"><?php echo e($value['FirstName']. ' '. $value['LastName']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

                <input type="hidden" name="TF" value="<?php echo e($Order->TranslationField); ?>">
                <input type="hidden" name="SL" value="<?php echo e($Order->SourceLanguage); ?>">
                <input type="hidden" name="DL" value="<?php echo e($Order->DestLanguage); ?>">
                <?php (session(['TranslatorsList'=>$TranslatorsList])); ?>
                <br>
                <button type="submit" class="btn btn-default">بروز رسانی
                    <i class="fa fa-check-circle"></i></button>
            </div>
        </form>
    </div>

    <?php break; ?>

    <?php case (5): ?>

    <div>
        مشخصات مترجم:
        <br>
نام مترجم:  <?php echo e($ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName); ?> &nbsp;
        تلفن همراه: <?php echo e($ResponsibleTranslator->MobileNumber); ?> &nbsp;
        تلفن ثابت: <?php echo e($ResponsibleTranslator->FixNumber); ?>


    </div>
    <?php break; ?>


    <?php case (6): ?>
    <div>
        مشخصات مترجم:
        <br>
        نام مترجم:  <?php echo e($ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName); ?> &nbsp;
        تلفن همراه: <?php echo e($ResponsibleTranslator->MobileNumber); ?> &nbsp;
        تلفن ثابت: <?php echo e($ResponsibleTranslator->FixNumber); ?>


    </div>
    <div class="pull-left">
        <a href="<?php echo e(route('Download',[$Order->user_id, $Order->TranslatedOrderFile])); ?>"> <button type="button" class="btn btn-primary"><i class="fa fa-arrow-down"></i> دانلود فایل
            </button> </a>
    </div>
    <br>
    <hr>
    <div>

        <a onclick="event.preventDefault();
            document.getElementById('FinalCheck').submit();">

            <button type="button" class="btn btn-block"><i class="fa fa-check-circle-o"></i>
                تایید نهایی سفارش
            </button>
        </a>
        <form id="FinalCheck" action="<?php echo e(route('StatusUpdate',[$Order->id,8])); ?>" method="POST"
              style="display: none;">
            <?php echo csrf_field(); ?>
        </form>

    </div>

    <?php break; ?>

    <?php case (8): ?>
    <div>
        مشخصات مترجم:
        <br>
        نام مترجم:  <?php echo e($ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName); ?> &nbsp;
        تلفن همراه: <?php echo e($ResponsibleTranslator->MobileNumber); ?> &nbsp;
        تلفن ثابت: <?php echo e($ResponsibleTranslator->FixNumber); ?>


    </div>
    <div class="pull-left">
        <a href="<?php echo e(route('Download',[$Order->user_id, $Order->TranslatedOrderFile])); ?>"> <button type="button" class="btn btn-primary"><i class="fa fa-arrow-down"></i> دانلود فایل
            </button> </a>
    </div>
    <?php break; ?>
<?php endswitch; ?>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardElements/Admin/DashboardNewOrderSpecsAdmin.blade.php ENDPATH**/ ?>