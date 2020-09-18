
<?php
if (!class_exists('DashboardCurrentUser')) {
    class DashboardCurrentUser
    {
        public static $CurrentUser;
        public static $id;
        public static $Role;
        public static $RoleId;
        public static $UserFullName;
        public static $UserStatus;
        public static $UserMode;
        public static $Menus;

// for admin
        public static $AdminNewRegisteredOrders;
        public static $AdminRejectedOrders;
        public static $employmentRequest;
        public static $OnlineUsers;
        public static $SiteVisitors;
        public static $PaidInvoices;

//  for customer
        public static $CustomerCurrentOrders;
        public static $CustomerFinishedOrders;
        public static $CustomerInvoices;

    }
}

//  General
DashboardCurrentUser::$CurrentUser= Auth::user();
DashboardCurrentUser::$id = DashboardCurrentUser::$CurrentUser->id;
DashboardCurrentUser::$Role = DashboardCurrentUser::$CurrentUser->role()->value('RoleName');
DashboardCurrentUser::$RoleId = DashboardCurrentUser::$CurrentUser->role()->value('id');
DashboardCurrentUser::$UserFullName = DashboardCurrentUser::$CurrentUser->FirstName . ' ' . DashboardCurrentUser::$CurrentUser->LastName;
DashboardCurrentUser::$UserStatus = DashboardCurrentUser::$CurrentUser->Status;
DashboardCurrentUser::$UserMode = DashboardCurrentUser::$CurrentUser->Mode;
DashboardCurrentUser::$Menus = MenuPicker(DashboardCurrentUser::$CurrentUser);

// for admin badges
DashboardCurrentUser::$AdminNewRegisteredOrders = OrdersList('1','');
DashboardCurrentUser::$AdminRejectedOrders= OrdersList('10','');
DashboardCurrentUser::$employmentRequest = NewEmployment();
DashboardCurrentUser::$OnlineUsers = OnlineUsers();
DashboardCurrentUser::$SiteVisitors = GetSiteVisitors(1);
DashboardCurrentUser::$PaidInvoices=OrdersList('3','');

//  for customer badges
DashboardCurrentUser::$CustomerCurrentOrders = OrdersList('1',DashboardCurrentUser::$id);
DashboardCurrentUser::$CustomerInvoices = OrdersList('2',DashboardCurrentUser::$id);
DashboardCurrentUser::$CustomerFinishedOrders = OrdersList('8',DashboardCurrentUser::$id);

?>

<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardElements/SharedParts/DashboardCurrentUser.blade.php ENDPATH**/ ?>