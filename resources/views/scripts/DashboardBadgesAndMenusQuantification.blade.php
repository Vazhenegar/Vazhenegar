{{-- initialize badges and menus with data that sent from dashboard main page--}}
@php
    //this file is to save and reuse logged in user info's in dashboard pages.
//  General
use Illuminate\Support\Facades\Auth;
$CurrentUser = Auth::user();
$Role = $CurrentUser->role()->value('RoleName');
$UserFullName = $CurrentUser->FirstName . ' ' . $CurrentUser->LastName;
$UserStatus = $CurrentUser->Status;
$UserMode = $CurrentUser->Mode;
$Menus = MenuPicker($CurrentUser);

// for admin badges
$allNewRegisteredOrders = AllNewRegisteredOrders();
$employmentRequest = NewEmployment();
$OnlineUsers = OnlineUsers();
$SiteVisitors = GetSiteVisitors(1);

//  for customer badges
$CustomerRegisteredOrders = CustomerRegisteredOrders($CurrentUser->id);
$CustomerInvoices = CustomerInvoices($CurrentUser->id);
@endphp

{{--    For badges and menus--}}
<script>
    //admin
    let allNewRegisteredOrders = @json(count($allNewRegisteredOrders['orders']));//Get from dashboard
    let employmentRequest =@json($employmentRequest);
    let OnlineUsers =@json($OnlineUsers);
    let SiteVisitors =@json($SiteVisitors);

    //customer
    let CurrentCustomerId =@json($CurrentUser->id);
    let CustomerRegisteredOrders =@json(count($CustomerRegisteredOrders));
    let invoices =@json(count($CustomerInvoices));


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


    {{--  ====================  Refresh dashboard data every 30 seconds ===================--}}
        {{--  ====================  for new orders ===================--}}

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

    {{--  ====================  for online users ===================--}}

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


    {{--  ====================  for new employments ================--}}

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

    {{-- ===================   for daily visitors ===============--}}

        let day = 1;
        let token = "{{ csrf_token() }}";
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
{{--    End of admin badges and menus--}}
{{--==============================================--}}
{{--For customer badges and menus--}}
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

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/Invoices/' + CurrentCustomerId,
                success: function (data) {
                    invoices=data.length;
                    setdata();
                }
            });
        }, 30000);

    //     End of customer badges and menus
    // ==============================================

</script>

