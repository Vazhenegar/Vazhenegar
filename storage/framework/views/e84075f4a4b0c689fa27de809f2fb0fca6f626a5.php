<?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php switch($Order->status_id):
    case (2): ?>
    
    <form action="<?php echo e(route('Pay')); ?>" method="post" id="NewOrderSpecCustomer">
        <?php echo csrf_field(); ?>

        <table class="table">
            <thead>فرم پرداخت فاکتور مشتری</thead>
            <tbody>
            <input type="hidden" name="Email" value="<?php echo e(DashboardCurrentUser::$CurrentUser->Email); ?>">
            <input type="hidden" name="Mobile" value="<?php echo e(DashboardCurrentUser::$CurrentUser->MobileNumber); ?>">
            <input type="hidden" name="OrderId" value="<?php echo e($Order->id); ?>">

            
            <tr>
                <td class="pull-right"><span>مبلغ قابل پرداخت:</span></td>

                <td class="pull-right">
                    <?php echo e($PayablePrice=$Order->TotalPrice); ?> تومان
                    <input type="hidden" name="Amount" value="<?php echo e($PayablePrice); ?>">
                </td>
            </tr>

            
            <tr>
                <td>انتخاب درگاه بانکی:</td>
            </tr>
            <tr id="BankPortals">
                <td class="pull-right BankPortal">
                    <a href="#"> <img src="<?php echo e(asset('images/site/SamanPortal.jpg')); ?>" alt=""></a>
                    <span style="font-size: 18px; color: deeppink;"> به زودی</span>
                </td>

                <td class="pull-right BankPortal">
                    <a href="#"> <img src="<?php echo e(asset('images/site/MellatPortal.jpg')); ?>" alt=""></a>
                    <span style="font-size: 18px; color: deeppink;"> به زودی</span>
                </td>

                <td class="pull-right BankPortal">
                    <input type="image" onclick="<?php echo e(session(['OrderId'=>$Order->id,'Client'=>'zarinpal','Amount'=>$PayablePrice])); ?>" src="<?php echo e(asset('images/site/ZarrinPal.png')); ?>"
                           alt="Submit Form"/>
                </td>


            </tr>

            
            <?php if(session('bank_response')): ?>
                <tr class="BankResponse">

                    <td class="FailedBankResponse">

                        <?php echo e('نتیجه تراکنش بانکی: '. session('bank_response')); ?>



                    </td>
                </tr>
            <?php endif; ?>

            </tbody>
        </table>
    </form>
    <?php break; ?>

    <?php case (3): ?>
    <div class="SBankResponse">

        <p class="SuccessBankResponse">
            وضعیت سفارش:
            <?php echo e(\App\OrderStatus::where('id', $Order->status_id)->value('Status')); ?>

            <br>
            پس از تایید واریز از طرف امور مالی، فایل شما برای مترجمین مرتبط ارسال خواهد شد.
        </p>

    </div>
    <?php break; ?>

    <?php case (4): ?>
    <div >

        <p >
            وضعیت سفارش:
            <?php echo e($OrderStatus); ?>

        </p>

    </div>
    <?php break; ?>

<?php endswitch; ?>


<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\Customer\DashboardNewOrderSpecsCustomer.blade.php ENDPATH**/ ?>