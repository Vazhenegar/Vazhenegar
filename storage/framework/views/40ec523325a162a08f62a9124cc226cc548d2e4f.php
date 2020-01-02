<?php
    $role_name=\App\Role::where('id',Auth::user()->Role)->value('RoleName');
    $user_menus=\App\UserMenu::where('Role_id',Auth::user()->Role)
                               ->where('Department_id',Auth::user()->Department)
                                ->get(['Url', 'MenuItem']);
            foreach ($user_menus as $menu){
                echo $menu->MenuItem. ' به آدرس '.$menu->Url;
                echo '<br/>';
            }
?>

<?php $__env->startSection('Role', $role_name); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <?php if(session('UserFirstName')): ?>
                            <div class="alert alert-success" role="alert">
                                Hello <?php echo e(session('UserFirstName')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        You are logged in to exclusive dashboard!
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/dashboard.blade.php ENDPATH**/ ?>