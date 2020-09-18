{{-- initialize badges and menus with data that sent from dashboard main page--}}

{{--    For badges and menus--}}
<script>
    //admin
    let AdminNewRegisteredOrders = @json(count(DashboardCurrentUser::$AdminNewRegisteredOrders));
    let AdminRejectedOrders = @json(count(DashboardCurrentUser::$AdminRejectedOrders));
    let employmentRequest =@json(DashboardCurrentUser::$employmentRequest);
    let OnlineUsers =@json(DashboardCurrentUser::$OnlineUsers);
    let SiteVisitors =@json(DashboardCurrentUser::$SiteVisitors);
    let PaidInvoices =@json(count(DashboardCurrentUser::$PaidInvoices));

    //customer
    let CurrentCustomerId =@json(DashboardCurrentUser::$CurrentUser->id);
    let $CustomerCurrentOrders =@json(count(DashboardCurrentUser::$CustomerCurrentOrders));
    let CustomerFinishedOrders=@json(count(DashboardCurrentUser::$CustomerFinishedOrders));
    let invoices =@json(count(DashboardCurrentUser::$CustomerInvoices));


    function setBadgeMenuValues(element_id, value, color) {
        if (document.getElementById(element_id)) {
            if (color) {
                document.getElementById(element_id).querySelector('#' + color).innerHTML = value;
            } else {
                document.getElementById(element_id).innerHTML = value;
            }
        }
    }

    function setdata() {
        // admin
        setBadgeMenuValues("NewOrders", AdminNewRegisteredOrders);
        setBadgeMenuValues("جدید", AdminNewRegisteredOrders, "yellow");
        setBadgeMenuValues("لغو شده", AdminRejectedOrders, "red");

        setBadgeMenuValues("NewEmployment", employmentRequest);
        setBadgeMenuValues("درخواست همکاری", employmentRequest, "yellow");
        setBadgeMenuValues("OnlineUsers", OnlineUsers);
        setBadgeMenuValues("SiteVisitors", SiteVisitors);
        setBadgeMenuValues("دریافتی", PaidInvoices, "green");

        // customer
        setBadgeMenuValues("CustomerCurrentOrders", $CustomerCurrentOrders);
        setBadgeMenuValues("CustomerFinishedOrders", CustomerFinishedOrders);
        setBadgeMenuValues("تکمیل شده", CustomerFinishedOrders, "green");

        setBadgeMenuValues("CustomerInvoices", invoices);
        setBadgeMenuValues("فاکتور", invoices, "yellow");
    }

    setdata();


    {{--  ====================  Refresh dashboard data every 30 seconds ===================--}}


    {{--    admin badges and menus --}}
    {{--  ====================  for new orders ===================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url:'{{route('GetOrders',['1',''])}}',
            success: function (response) {
                AdminNewRegisteredOrders = response.length;
                setdata();
            }
        });
    }, 30000);


    {{--  ====================  for rejected orders ===================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url:'{{route('GetOrders',['10',''])}}',
            success: function (response) {
                AdminRejectedOrders = response.length;
                setdata();
            }
        });
    }, 30000);

    {{--  ====================  for online users ===================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/GetOnlineUsers',
            success: function (data) {
                OnlineUsers = data;
                setdata();

            }
        });
    }, 30000);


    {{--  ====================  for new employments ================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/NewEmployments',
            success: function (data) {
                employmentRequest = data;
                setdata();
            }
        });
    }, 30000);

    {{-- ===================   for daily visitors ===============--}}

    let day = 2;
    let token = "{{ csrf_token() }}";
    setInterval(function () {
        $.ajax({
            type: "POST",
            url: '/GetSiteVisitors/' + day,
            data: {_token: token},
            success: function (data) {
                SiteVisitors = data;
                setdata();
            }
        });
    }, 30000);


    {{--  ====================  for orders that invoices already paid ================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '{{route('GetOrders',['3',''])}}',
            success: function (data) {
                PaidInvoices = data.length;
                setdata();
            }
        });
    }, 30000);
</script>
{{--    End of admin badges and menus--}}
{{--==============================================--}}


{{--For customer badges and menus--}}
<script>

    //     ====================  for customer New Orders ===================

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '{{route('GetOrders',['1',DashboardCurrentUser::$id])}}',
            success: function (data) {
                $CustomerCurrentOrders = data.length;
                setdata();
            }
        });
    }, 30000);


   //     ====================  for customer Finished Orders ===================

    setInterval(function () {

        $.ajax({
            type: "GET",
            url:'{{route('GetOrders',['8',DashboardCurrentUser::$id])}}',
            success: function (data) {
                CustomerFinishedOrders = data.length;
                setdata();
            }
        });
    }, 30000);

    // ====================  for customer invoices ===================

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '{{route('GetOrders',['2',DashboardCurrentUser::$id])}}',
            success: function (data) {
                invoices = data.length;
                setdata();
            }
        });
    }, 30000);

    //     End of customer badges and menus
    // ==============================================

</script>

