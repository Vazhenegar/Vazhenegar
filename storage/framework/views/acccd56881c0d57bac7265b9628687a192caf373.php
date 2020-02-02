<?php $__env->startSection('content'); ?>

<?php
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
?>

    <?php switch($CurrentUser->role()->value('id')):
        
        case (1): ?>
<?php $__env->startSection('Title', ' پنل '.$Role); ?>
<?php echo $__env->make('vazhenegar.DashboardAdminIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php break; ?>

<?php case (5): ?>
<?php $__env->startSection('Title', ' پنل '.$Role); ?>
<?php echo $__env->make('vazhenegar.DashboardTranslatorIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php break; ?>

<?php case (11): ?>
<?php $__env->startSection('Title', ' پنل '.$Role); ?>
<?php echo $__env->make('vazhenegar.DashboardCustomerIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php break; ?>
<?php endswitch; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\Dashboard.blade.php ENDPATH**/ ?>