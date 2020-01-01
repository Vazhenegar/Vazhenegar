<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo e(config('app.name')); ?>- پنل <?php echo $__env->yieldContent('Role'); ?></title>

    <!-- Scripts -->
    
</head>
<body>
<!-- Right Side Of Navbar -->
<ul>
    <!-- Authentication Links -->
    <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
        </li>
        <?php if(Route::has('register')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            </li>
        <?php endif; ?>
    <?php else: ?>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->FirstName); ?> <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
    <?php endif; ?>
</ul>


<main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
</main>

</body>
</html>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/auth/DashboardLayout/DashboardMasterLayout.blade.php ENDPATH**/ ?>