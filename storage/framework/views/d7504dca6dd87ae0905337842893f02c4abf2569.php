


<script>
    //admin
    let AdminNewRegisteredOrders = <?php echo json_encode(count(DashboardCurrentUser::$AdminNewRegisteredOrders), 15, 512) ?>;
    let AdminRejectedOrders = <?php echo json_encode(count(DashboardCurrentUser::$AdminRejectedOrders), 15, 512) ?>;
    let employmentRequest =<?php echo json_encode(DashboardCurrentUser::$employmentRequest, 15, 512) ?>;
    let OnlineUsers =<?php echo json_encode(DashboardCurrentUser::$OnlineUsers, 15, 512) ?>;
    let SiteVisitors =<?php echo json_encode(DashboardCurrentUser::$SiteVisitors, 15, 512) ?>;
    let PaidInvoices =<?php echo json_encode(count(DashboardCurrentUser::$PaidInvoices), 15, 512) ?>;

    //customer
    let CurrentCustomerId =<?php echo json_encode(DashboardCurrentUser::$CurrentUser->id, 15, 512) ?>;
    let $CustomerCurrentOrders =<?php echo json_encode(count(DashboardCurrentUser::$CustomerCurrentOrders), 15, 512) ?>;
    let CustomerFinishedOrders=<?php echo json_encode(count(DashboardCurrentUser::$CustomerFinishedOrders), 15, 512) ?>;
    let invoices =<?php echo json_encode(count(DashboardCurrentUser::$CustomerInvoices), 15, 512) ?>;


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


    


    
    

    setInterval(function () {
        $.ajax({
            type: "GET",
            url:'<?php echo e(route('GetOrders',[DashboardCurrentUser::$RoleId, '1',''])); ?>',
            success: function (response) {
                AdminNewRegisteredOrders = response.length;
                setdata();
            }
        });
    }, 30000);


    

    setInterval(function () {
        $.ajax({
            type: "GET",
            url:'<?php echo e(route('GetOrders',[DashboardCurrentUser::$RoleId, '10',''])); ?>',
            success: function (response) {
                AdminRejectedOrders = response.length;
                setdata();
            }
        });
    }, 30000);

    

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

    

    let day = 2;
    let token = "<?php echo e(csrf_token()); ?>";
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


    

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '<?php echo e(route('GetOrders',[DashboardCurrentUser::$RoleId, '3',''])); ?>',
            success: function (data) {
                PaidInvoices = data.length;
                setdata();
            }
        });
    }, 30000);
</script>





<script>

    //     ====================  for customer New Orders ===================

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '<?php echo e(route('GetOrders',[DashboardCurrentUser::$RoleId, '1',DashboardCurrentUser::$id])); ?>',
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
            url:'<?php echo e(route('GetOrders',[DashboardCurrentUser::$RoleId, '8',DashboardCurrentUser::$id])); ?>',
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
            url: '<?php echo e(route('GetOrders',[DashboardCurrentUser::$RoleId, '2',DashboardCurrentUser::$id])); ?>',
            success: function (data) {
                invoices = data.length;
                setdata();
            }
        });
    }, 30000);

    //     End of customer badges and menus
    // ==============================================

</script>

<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\scripts\DashboardBadgesAndMenusQuantification.blade.php ENDPATH**/ ?>