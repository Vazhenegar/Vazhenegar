<?php
    $CurrentUser=Auth::user();
    $Role=$CurrentUser->role()->value('RoleName');
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=(new App\Http\Controllers\HomeController)->MenuPicker($CurrentUser);

 // for admin badges
    $allNewRegisteredOrders=AllNewRegisteredOrders();
    $employmentRequest=NewEmployment();
    $OnlineUsers=OnlineUsers();
    $DailyVisitors=(new App\Session)->GetSiteVisitors(1);

//  for user badges
    $UserId=$CurrentUser->id;
    $userRegisteredOrders=UserRegisteredOrders($CurrentUser->id);

?>

<?php $__env->startSection('content'); ?>
    <?php switch($CurrentUser->role()->value('id')):
        
        case (1): ?>
<?php $__env->startSection('Title', '- پنل '.$Role); ?>
<?php echo $__env->make('vazhenegar.DashboardAdminContent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php break; ?>

<?php case (8): ?>
<?php $__env->startSection('Title', '- پنل '.$Role); ?>


<?php break; ?>

<?php case (11): ?>
<?php $__env->startSection('Title', '- پنل '.$Role); ?>
<?php echo $__env->make('vazhenegar.DashboardCustomerContent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php break; ?>
<?php endswitch; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\Dashboard.blade.php ENDPATH**/ ?>