<form action="/" method="post" id="NewOrderSpecCustomer">
    <?php echo csrf_field(); ?>

    <table class="table">
        <thead>فرم پرداخت فاکتور مشتری</thead>
        <tbody>

        
        <tr>
            <td class="pull-right"><span>مبلغ قابل پرداخت:</span></td>

            <td class="pull-right">120.000 تومان  </td>
        </tr>

        
        <tr>
            <td>انتخاب درگاه بانکی:</td>
        </tr>
        <tr>
            <td class="pull-right BankPortal">
                <a href="#"> <img src="<?php echo e(asset('images/site/SamanPortal.jpg')); ?>" alt=""></a>
            </td>
            <td class="pull-right BankPortal">
                <a href="#"> <img src="<?php echo e(asset('images/site/MellatPortal.jpg')); ?>" alt=""></a>
            </td>
        </tr>

        
        <tr>
            <td class="pull-left">
                <a href="<?php echo e($Order->id); ?>/edit">
                    <button type="button" class="btn btn-block"><i class="fa fa-pencil"></i>
                        ثبت فاکتور پرداخت شده در سیستم
                    </button>
                </a>
            </td>
        </tr>

        </tbody>
    </table>
</form>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardNewOrderSpecsCustomer.blade.php ENDPATH**/ ?>