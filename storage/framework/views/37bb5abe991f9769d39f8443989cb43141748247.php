<form action="/" method="post" id="NewOrderSpecCustomer">
    <?php echo csrf_field(); ?>

    <table class="table">
        <thead>فرم پرداخت فاکتور مشتری</thead>
        <tbody>

        
        <tr>
            <td class="pull-right"><span>مبلغ قابل پرداخت:</span></td>

            <td class="pull-right"><?php echo e($Order->TotalPrice/2); ?> تومان </td>
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
                <a href="#"> <img src="<?php echo e(asset('images/site/ZarrinPal.png')); ?>" alt=""></a>
            </td>
        </tr>

        
        <tr>
            <td class="pull-left">
                <a href="<?php echo e($Order->id); ?>/<?php echo e($Order->TotalPrice/2); ?>/InvoiceSubmit">
                    <button type="button" class="btn btn-block"><i class="fa fa-credit-card"></i>
                        ثبت فاکتور پرداخت شده در سیستم
                    </button>
                </a>
            </td>
        </tr>

        </tbody>
    </table>
</form>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardNewOrderSpecsCustomer.blade.php ENDPATH**/ ?>