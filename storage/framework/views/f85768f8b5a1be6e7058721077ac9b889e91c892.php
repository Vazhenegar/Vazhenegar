<?php
    use Illuminate\Support\Facades\Auth;
    $user=new App\User;
    $CurrentUser=Auth::user();
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $Role=$CurrentUser->role()->value('RoleName');
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=(new App\Http\Controllers\HomeController)->MenuPicker($CurrentUser);

 // for admin badges
        $employmentRequest=NewEmployment();
        $OnlineUsers=OnlineUsers();
        $DailyVisitors=(new App\Session)->GetSiteVisitors(1);
?>

<?php $__env->startSection('Title', '- پنل '.$Role); ?>

<?php $__env->startSection('content'); ?>
    

    <?php echo $__env->make('auth.DashboardLayout.TopBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <?php echo $__env->make('auth.DashboardLayout.RightSideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <?php echo $__env->make('auth.DashboardLayout.LeftSideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        <?php switch($CurrentUser->role()->value('id')):
            
                    
            case (1): ?>
            <?php echo $__env->make('vazhenegar.AdminBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('vazhenegar.OrdersList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Main row -->
                <div class="row">
                    <!-- right col -->
                    <section class="col-lg-7 connectedSortable">
                        <?php echo $__env->make('vazhenegar.Charts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('vazhenegar.ChatBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('vazhenegar.EmailWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </section>
                    <!-- /.right col -->


                    <!-- left col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">
                        <?php echo $__env->make('vazhenegar.Calendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </section>
                    <!-- left col -->

                </div>
                <!-- /.row (main row) -->



                <?php break; ?>
                
                    
                <?php case (8): ?>



                <?php break; ?>
                
                    
                <?php case (11): ?>
                    <?php echo $__env->make('vazhenegar.CustomerBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('vazhenegar.CustomerGuide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                <?php break; ?>
            <?php endswitch; ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\dashboard.blade.php ENDPATH**/ ?>