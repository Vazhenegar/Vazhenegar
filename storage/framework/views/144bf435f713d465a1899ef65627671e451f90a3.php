
<!-- Small boxes (Stat box) -->
<div class="row">
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3 id="NewOrders"></h3>

                <p>سفارش جدید</p>
            </div>
            <div class="icon">
                <i class="fa fa-file-text"></i>
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
                <h3 id="OnlineUsers"></h3>
                <p>کاربران آنلاین</p>
            </div>
            <div class="icon">
                <i class="fa fa-wifi"></i>
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
                <h3 id="NewEmployment"></h3>

                <p>درخواست همکاری جدید</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
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
                <h3 id="DailySiteVisitors"></h3> 

                <p>بازدید امروز</p>
            </div>
            <div class="icon">
                <i class="fa fa-line-chart"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->


<script>
    let allNewRegisteredOrders =<?php echo json_encode($allNewRegisteredOrders->count(), 15, 512) ?>;
    let employmentRequest =<?php echo json_encode($employmentRequest, 15, 512) ?>;
    let OnlineUsers =<?php echo json_encode($OnlineUsers, 15, 512) ?>;
    let DailyVisitors=<?php echo json_encode($DailyVisitors, 15, 512) ?>;

    document.getElementById('NewOrders').innerHTML = allNewRegisteredOrders;
    document.getElementById('جدید').querySelector('#yellow').innerHTML = allNewRegisteredOrders;

    document.getElementById('NewEmployment').innerHTML = employmentRequest;
    document.getElementById('درخواست همکاری').querySelector('#yellow').innerHTML = employmentRequest;

    document.getElementById('OnlineUsers').innerHTML=OnlineUsers;
    document.getElementById('DailySiteVisitors').innerHTML=DailyVisitors;

    
    
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/AllNewRegisteredOrders',
            success: function (data) {
                let count=data.length;
                document.getElementById('NewOrders').innerHTML = count;
                document.getElementById('جدید').querySelector('#yellow').innerHTML = count;
            }
        });
    }, 30000);


    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/GetOnlineUsers',
            success: function (data) {
                document.getElementById('OnlineUsers').innerHTML=data;

            }
        });
    }, 30000);

        
    let day = 1;
    let token = "<?php echo e(csrf_token()); ?>";
    setInterval(function () {
        $.ajax({
            type: "POST",
            url: '/GetDailyVisitors/' + day,
            data: {_token: token},
            success: function (data) {
                document.getElementById('DailySiteVisitors').innerHTML=data;
            }
        });
    }, 30000);

    

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/NewEmployments',
            success: function (data) {
                document.getElementById('NewEmployment').innerHTML = data;
                document.getElementById('درخواست همکاری').querySelector('#yellow').innerHTML = data;
            }
        });
    }, 30000);

</script>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardAdminBadges.blade.php ENDPATH**/ ?>