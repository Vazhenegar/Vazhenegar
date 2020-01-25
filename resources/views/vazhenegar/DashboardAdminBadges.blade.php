{{--================ Badges For Admin ====================================--}}
<!-- Small boxes (Stat box) -->
<div class="row">
    {{--==================== New Orders ================================--}}

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
    {{--=================== Online Users =================================--}}

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
    {{--==================== Employment ================================--}}

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
    {{--=================== Site Visit Statistics  =================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-light-blue-gradient">
            <div class="inner">
                <h3 id="DailySiteVisitors"></h3> {{--visitors of last day--}}

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
{{--=================== End Of Admin Badges   =================================--}}
{{-- initialize badges with data that sent from dashboard main page--}}
<script>
    let allNewRegisteredOrders = @json(count($allNewRegisteredOrders['orders']));
    let employmentRequest =@json($employmentRequest);
    let OnlineUsers =@json($OnlineUsers);
    let DailyVisitors =@json($DailyVisitors);

    document.getElementById('NewOrders').innerHTML = allNewRegisteredOrders;
    document.getElementById('جدید').querySelector('#yellow').innerHTML = allNewRegisteredOrders;

    document.getElementById('NewEmployment').innerHTML = employmentRequest;
    document.getElementById('درخواست همکاری').querySelector('#yellow').innerHTML = employmentRequest;

    document.getElementById('OnlineUsers').innerHTML = OnlineUsers;
    document.getElementById('DailySiteVisitors').innerHTML = DailyVisitors;

    {{--  ====================  Refresh dashboard data every 30 seconds ===================--}}
    {{--  ====================  for new orders ===================--}}
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/AllNewRegisteredOrders',
            success: function (data) {
                let Amount = data['orders'].length;
                document.getElementById('NewOrders').innerHTML = Amount;
                document.getElementById('جدید').querySelector('#yellow').innerHTML = Amount;
            }
        });
    }, 30000);

    {{--  ====================  for online users ===================--}}
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/GetOnlineUsers',
            success: function (data) {
                document.getElementById('OnlineUsers').innerHTML = data;

            }
        });
    }, 30000);

        {{-- ===================   for daily visitors ===============--}}
    let day = 1;
    let token = "{{ csrf_token() }}";
    setInterval(function () {
        $.ajax({
            type: "POST",
            url: '/GetDailyVisitors/' + day,
            data: {_token: token},
            success: function (data) {
                document.getElementById('DailySiteVisitors').innerHTML = data;
            }
        });
    }, 30000);

    {{--  ====================  for new employments ================--}}

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