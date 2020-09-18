<!-- right side column. contains the logo and sidebar -->

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="<?php echo e(asset('images/site/user.png')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p><?php echo e(DashboardCurrentUser::$UserFullName); ?></p>
                <a id="UserMode"><i class="fa fa-circle text-success"></i><?php echo e(DashboardCurrentUser::$CurrentUser->mode(DashboardCurrentUser::$UserMode)); ?>

                </a>
            </div>
        </div>

    

    <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fa fa-home"></i>
                    <span> داشبورد</span>
                </a>
            </li>

            <?php $__currentLoopData = DashboardCurrentUser::$Menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <li class="treeview active">
                    <a id="<?php echo e($item->MainMenu); ?>" href="<?php echo e($item->Url); ?>">
                        <i class="<?php echo e($item->Icon?$item->Icon :'fa fa-circle-o'); ?>"></i>
                        <span><?php echo e($item->MainMenu); ?></span>
                        <?php if($item->sub_menus->count()): ?>
                            <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                        <?php endif; ?>
                    </a>
                    <?php if($item->sub_menus->count()): ?>
                        <ul class="treeview-menu">
                            <?php $__currentLoopData = $item->sub_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a id="<?php echo e($subitem->SubMenu); ?>" href="<?php echo e(route($subitem->Url,[$subitem->StatusId])); ?>">
                                        <i class="<?php echo e($subitem->Icon?$subitem->Icon :'fa fa-circle-o'); ?>"></i>
                                        <span><?php echo e($subitem->SubMenu); ?></span>
                                        <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </li>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\SharedParts\DashboardRightSideBar.blade.php ENDPATH**/ ?>