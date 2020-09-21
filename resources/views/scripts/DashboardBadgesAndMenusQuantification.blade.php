{{-- initialize badges and menus with data that sent from dashboard main page--}}

{{--    For badges and menus--}}
<script>

    //general
    let NewRegisteredOrders = @json(count(DashboardCurrentUser::$NewRegisteredOrders));
    let InProgressOrders = @json(count(DashboardCurrentUser::$InProgressOrders));
    let FinishedOrders = @json(count(DashboardCurrentUser::$FinishedOrders));


    //admin
    let employmentRequest =@json(DashboardCurrentUser::$employmentRequest);
    let OnlineUsers =@json(DashboardCurrentUser::$OnlineUsers);
    let SiteVisitors =@json(DashboardCurrentUser::$SiteVisitors);
    let PaidInvoices =@json(count(DashboardCurrentUser::$PaidInvoices));
    let AssignToTranslator =@json(count(DashboardCurrentUser::$AssignToTranslator));
    let OrderFinalCheck =@json(count(DashboardCurrentUser::$OrderFinalCheck));
    let AllOrders =@json(count(DashboardCurrentUser::$AllOrders));

    //customer
    let CRejectedOrders=@json(count(DashboardCurrentUser::$CRejectedOrders));
    let CurrentCustomerId =@json(DashboardCurrentUser::$CurrentUser->id);
    let CustomerInvoices =@json(count(DashboardCurrentUser::$CustomerInvoices));

    //translator
    let TRejectedOrders=@json(count(DashboardCurrentUser::$TRejectedOrders));
    let DeliveredOrders=@json(count(DashboardCurrentUser::$DeliveredOrders));


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
        setBadgeMenuValues("NewOrders", NewRegisteredOrders);
        setBadgeMenuValues("سفارشات جدید", NewRegisteredOrders, "yellow");
        setBadgeMenuValues("لغو شده توسط مترجم", TRejectedOrders, "red");
        setBadgeMenuValues("لغو شده توسط مشتری", CRejectedOrders, "red");
        setBadgeMenuValues("دریافتی", PaidInvoices, "green");
        setBadgeMenuValues("اختصاص به مترجم", AssignToTranslator, "yellow");
        setBadgeMenuValues("سفارشات در حال انجام", InProgressOrders, "green");
        setBadgeMenuValues("بررسی نهایی", OrderFinalCheck, "blue");
        setBadgeMenuValues("لیست سفارشات تکمیل شده", FinishedOrders, "green");
        setBadgeMenuValues("لیست تمام سفارشات", AllOrders, "white");
        setBadgeMenuValues("NewEmployment", employmentRequest);
        setBadgeMenuValues("درخواست همکاری", employmentRequest, "yellow");
        setBadgeMenuValues("OnlineUsers", OnlineUsers);
        setBadgeMenuValues("SiteVisitors", SiteVisitors);

        // customer
        setBadgeMenuValues("CustomerNewOrders", NewRegisteredOrders);
        setBadgeMenuValues("ثبت شده", NewRegisteredOrders, "green");
        setBadgeMenuValues("در حال انجام", InProgressOrders, "green");
        setBadgeMenuValues("لغو شده", CRejectedOrders, "red");
        setBadgeMenuValues("CustomerFinishedOrders", FinishedOrders);
        setBadgeMenuValues("سفارشات تکمیل شده", FinishedOrders, "green");
        setBadgeMenuValues("لیست سفارشات", AllOrders, "white");
        setBadgeMenuValues("CustomerInvoices", CustomerInvoices);
        setBadgeMenuValues("فاکتور", CustomerInvoices, "blue");

        // translator
        setBadgeMenuValues("TranslatorNewOrders", AssignToTranslator);
        setBadgeMenuValues("جدید", AssignToTranslator, "green");
        setBadgeMenuValues("دریافت شده", InProgressOrders, "green");
        setBadgeMenuValues("تحویل شده", DeliveredOrders, "blue");
        setBadgeMenuValues("TranslatorFinishedOrders", FinishedOrders);
        setBadgeMenuValues("تکمیل شده", FinishedOrders, "green");
        setBadgeMenuValues("سفارشات لغو شده", TRejectedOrders, "red");
        setBadgeMenuValues("تمام سفارشات", AllOrders, "white");


    }

    setdata();


    {{--  ====================  Refresh dashboard data every 30 seconds ===================--}}


    {{--    admin badges and menus --}}
    {{--  ====================  for new orders ===================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url:'{{route('GetOrders',[DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '1'])}}',
            success: function (response) {
                NewRegisteredOrders = response.length;
                setdata();
            }
        });
    }, 30000);


    {{--  ====================  for rejected orders ===================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url:'{{route('GetOrders',[DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id,'10'])}}',
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
            url: '{{route('GetOrders',[DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '3'])}}',
            success: function (data) {
                PaidInvoices = data.length;
                setdata();
            }
        });
    }, 30000);


    {{--  ====================  for orders that waiting to assign to translator ================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '{{route('GetOrders',[DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '4'])}}',
            success: function (data) {
                AssignToTranslator = data.length;
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
            url: '{{route('GetOrders',[DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id,'1'])}}',
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
            url:'{{route('GetOrders',[DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '8'])}}',
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
            url: '{{route('GetOrders',[DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '2'])}}',
            success: function (data) {
                invoices = data.length;
                setdata();
            }
        });
    }, 30000);

    //     End of customer badges and menus
    // ==============================================

</script>

