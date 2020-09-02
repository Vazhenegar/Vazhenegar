<?php switch($Order->status_id):
    case (2): ?>
    
    <form action="/" method="post" id="NewOrderSpecCustomer">
        <?php echo csrf_field(); ?>

        <table class="table">
            <thead>فرم پرداخت فاکتور مشتری</thead>
            <tbody>

            
            <tr>
                <td class="pull-right"><span>مبلغ قابل پرداخت:</span></td>

                <td class="pull-right"><?php echo e($Order->TotalPrice/2); ?> تومان</td>
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

            










            </tbody>
        </table>
    </form>
    <?php break; ?>
    <?php case (3): ?>
    <div>
        وضعیت سفارش:
    <?php echo e(\App\OrderStatus::where('id', $Order->status_id)->value('Status')); ?>

    </div>
    <?php break; ?>

<?php endswitch; ?>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardNewOrderSpecsCustomer.blade.php ENDPATH**/ ?>