
<?php
if (!class_exists('DashboardCurrentUser')) {
    class DashboardCurrentUser
    {
        public static $CurrentUser;
        public static $Role;
        public static $UserFullName;
        public static $UserStatus;
        public static $UserMode;
        public static $Menus;

// for admin badges
        public static $allNewRegisteredOrders;
        public static $employmentRequest;
        public static $OnlineUsers;
        public static $SiteVisitors;

//  for customer badges
        public static $CustomerRegisteredOrders;
        public static $CustomerInvoices;

    }
}

//  General
use Illuminate\Support\Facades\Auth;
DashboardCurrentUser::$CurrentUser= Auth::user();
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

//  for customer badges
DashboardCurrentUser::$CustomerRegisteredOrders = CustomerRegisteredOrders(DashboardCurrentUser::$CurrentUser->id);
DashboardCurrentUser::$CustomerInvoices = CustomerInvoices(DashboardCurrentUser::$CurrentUser->id,2);

?>

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardCurrentUser.blade.php ENDPATH**/ ?>