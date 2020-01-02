<?php
    $role_name=\App\Role::where('id',Auth::user()->Role)->value('RoleName');
?>

<?php $__env->startSection('Role', $role_name); ?>
<?php $__env->startSection('content'); ?>


    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false" v-pre>
        <?php echo e(Auth::user()->FirstName); ?> <span class="caret"></span>
    </a>


    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
       onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        خروج از ناحیه کاربری
    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
    </form>




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <?php echo $__env->make('auth.DashboardLayout.menus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="card-body">


                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/dashboard.blade.php ENDPATH**/ ?>