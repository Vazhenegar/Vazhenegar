{{--  this class will save current user info's for use in all dashboard pages --}}
@php
if (!class_exists('DashboardCurrentUser')) {
    class DashboardCurrentUser
    {
        public static $CurrentUser;
        public static $id;
        public static $Role;
        public static $UserFullName;
        public static $UserStatus;
        public static $UserMode;
        public static $Menus;

// for admin
        public static $ordersList;
        public static $allNewRegisteredOrders;
        public static $employmentRequest;
        public static $OnlineUsers;
        public static $SiteVisitors;
        public static $PaidInvoices;

//  for customer
        public static $CustomerRegisteredOrders;
        public static $CustomerInvoices;

    }
}

//  General
use Illuminate\Support\Facades\Auth;
DashboardCurrentUser::$CurrentUser= Auth::user();
DashboardCurrentUser::$id = DashboardCurrentUser::$CurrentUser->id;
DashboardCurrentUser::$Role = DashboardCurrentUser::$CurrentUser->role()->value('RoleName');
DashboardCurrentUser::$UserFullName = DashboardCurrentUser::$CurrentUser->FirstName . ' ' . DashboardCurrentUser::$CurrentUser->LastName;
DashboardCurrentUser::$UserStatus = DashboardCurrentUser::$CurrentUser->Status;
DashboardCurrentUser::$UserMode = DashboardCurrentUser::$CurrentUser->Mode;
DashboardCurrentUser::$Menus = MenuPicker(DashboardCurrentUser::$CurrentUser);

// for admin badges
DashboardCurrentUser::$allNewRegisteredOrders = AllNewRegisteredOrders();
DashboardCurrentUser::$employmentRequest = NewEmployment();
DashboardCurrentUser::$OnlineUsers = OnlineUsers();
DashboardCurrentUser::$SiteVisitors = GetSiteVisitors(1);
DashboardCurrentUser::$PaidInvoices=PaidInvoices();

//  for customer badges
DashboardCurrentUser::$CustomerRegisteredOrders = CustomerRegisteredOrders(DashboardCurrentUser::$CurrentUser->id);
DashboardCurrentUser::$CustomerInvoices = CustomerInvoices(DashboardCurrentUser::$CurrentUser->id,2);

@endphp

