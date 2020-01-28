
<!-- Small boxes (Stat box) -->
<div class="row">
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3 id="CustomerNewOrders"></h3>

                <p>سفارشات جاری</p>
            </div>
            <div class="icon">
                <i class="fa fa-pencil-square-o"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">
                <h3 id="CustomerFinishedOrders">12</h3>
                <p>سفارشات تکمیل شده</p>
            </div>
            <div class="icon">
                <i class="fa fa-check-square-o"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow-gradient">
            <div class="inner">
                <h3 id="CustomerMessages">12</h3>

                <p>پیام ها</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope-open-o"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-light-blue-gradient">
            <div class="inner">
                <h3 id="CustomerInvoices">12</h3>

                <p>فاکتور ها</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->


<script>
    let CurrentCustomerId=<?php echo json_encode($CustomerId, 15, 512) ?>; //Get from dashboard
    let CustomerRegisteredOrders =<?php echo json_encode(count($CustomerRegisteredOrders), 15, 512) ?>; //Get from dashboard

    document.getElementById('CustomerNewOrders').innerHTML = CustomerRegisteredOrders;

    
    
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/CustomersRegisteredOrders/'+CurrentCustomerId,
            success: function (data) {
                document.getElementById('CustomerNewOrders').innerHTML = CustomerRegisteredOrders;
            }
        });
    }, 30000);

</script>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardCustomerBadges.blade.php ENDPATH**/ ?>