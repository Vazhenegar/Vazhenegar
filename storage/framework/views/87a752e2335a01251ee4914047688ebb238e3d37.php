


<script>
    //admin
    let allNewRegisteredOrders = <?php echo json_encode(count(DashboardCurrentUser::$allNewRegisteredOrders['orders']), 15, 512) ?>;
    let employmentRequest =<?php echo json_encode(DashboardCurrentUser::$employmentRequest, 15, 512) ?>;
    let OnlineUsers =<?php echo json_encode(DashboardCurrentUser::$OnlineUsers, 15, 512) ?>;
    let SiteVisitors =<?php echo json_encode(DashboardCurrentUser::$SiteVisitors, 15, 512) ?>;

    //customer
    let CurrentCustomerId =<?php echo json_encode(DashboardCurrentUser::$CurrentUser->id, 15, 512) ?>;
    let CustomerRegisteredOrders =<?php echo json_encode(count(DashboardCurrentUser::$CustomerRegisteredOrders), 15, 512) ?>;
    let invoices =<?php echo json_encode(count(DashboardCurrentUser::$CustomerInvoices), 15, 512) ?>;


    function setBadgeMenuValues(element_id,value,color) {
        if(document.getElementById(element_id)){
           if(color){
               document.getElementById(element_id).querySelector('#'+color).innerHTML=value;
           }else{
               document.getElementById(element_id).innerHTML=value;
           }
        }
    }
    function setdata() {
        setBadgeMenuValues("NewOrders",allNewRegisteredOrders);
        setBadgeMenuValues("جدید",allNewRegisteredOrders,"yellow");
        setBadgeMenuValues("NewEmployment",employmentRequest);
        setBadgeMenuValues("درخواست همکاری",employmentRequest,"yellow");
        setBadgeMenuValues("OnlineUsers",OnlineUsers);
        setBadgeMenuValues("SiteVisitors", SiteVisitors);
        setBadgeMenuValues("CustomerNewOrders", CustomerRegisteredOrders);
        setBadgeMenuValues("CustomerInvoices", invoices);
        setBadgeMenuValues("فاکتور", invoices,"yellow");
    }

    setdata();


    
        

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/AllNewRegisteredOrders',
                success: function (data) {
                    allNewRegisteredOrders=data['orders'].length;
                    setdata();
                }
            });
        }, 30000);

    

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/GetOnlineUsers',
                success: function (data) {
                    OnlineUsers=data;
                    setdata();

                }
            });
        }, 30000);


    

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/NewEmployments',
                success: function (data) {
                    employmentRequest=data;
                    setdata();
                }
            });
        }, 30000);

    

        let day = 1;
        let token = "<?php echo e(csrf_token()); ?>";
        setInterval(function () {
            $.ajax({
                type: "POST",
                url: '/GetSiteVisitors/' + day,
                data: {_token: token},
                success: function (data) {
                    SiteVisitors=data;
                    setdata();
                }
            });
        }, 30000);

</script>



<script>

      // ====================  Refresh dashboard data every 30 seconds ===================
      //     ====================  for customer New Orders ===================

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/CustomersRegisteredOrders/' + CurrentCustomerId,
                success: function (data) {
                    CustomerRegisteredOrders=data.length;
                    setdata();
                }
            });
        }, 30000);

      // ====================  for customer invoices ===================

        let status_id = 2;
        setInterval(function () {
            $.ajax({
                type: "GET",
                url: 'Invoices/' + CurrentCustomerId + '/'+ status_id,
                success: function (data) {
                    invoices=data.length;
                    setdata();
                }
            });
        }, 30000);

    //     End of customer badges and menus
    // ==============================================

</script>

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/scripts/DashboardBadgesAndMenusQuantification.blade.php ENDPATH**/ ?>