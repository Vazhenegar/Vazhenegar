
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

            public static $NewRegisteredOrders;
            public static $InProgressOrders;
            public static $FinishedOrders;
            public static $AllOrders;


    // for admin
            public static $IssuedInvoices;
            public static $PaidInvoices;
            public static $AssignToTranslator;
            public static $OrderFinalCheck;
            public static $employmentRequest;
            public static $OnlineUsers;
            public static $SiteVisitors;

    //  for customer
            public static $CRejectedOrders; //Orders that rejected by customer
            public static $CustomerInvoices;

    //  for translator
            public static $DeliveredOrders; //Orders that uploaded by translator
            public static $TRejectedOrders; //Orders that rejected by translator


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

        DashboardCurrentUser::$NewRegisteredOrders = OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '1');
        DashboardCurrentUser::$InProgressOrders=OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '5');
        DashboardCurrentUser::$FinishedOrders = OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '8');
        DashboardCurrentUser::$AllOrders=OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '');


        // for admin
        DashboardCurrentUser::$IssuedInvoices=OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '2');
        DashboardCurrentUser::$PaidInvoices=OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '3');
        DashboardCurrentUser::$AssignToTranslator=OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '4');
        DashboardCurrentUser::$OrderFinalCheck=OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '6');
        DashboardCurrentUser::$employmentRequest = NewEmployment();
        DashboardCurrentUser::$OnlineUsers = OnlineUsers();
        DashboardCurrentUser::$SiteVisitors = GetSiteVisitors(1);

        //  for customer
        DashboardCurrentUser::$CRejectedOrders= OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '9');
        DashboardCurrentUser::$CustomerInvoices = OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '2');

        //  for translator
        DashboardCurrentUser::$TRejectedOrders= OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '10');
        DashboardCurrentUser::$DeliveredOrders= OrdersList(DashboardCurrentUser::$RoleId, DashboardCurrentUser::$id, '6');

?>

<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\SharedParts\DashboardCurrentUser.blade.php ENDPATH**/ ?>