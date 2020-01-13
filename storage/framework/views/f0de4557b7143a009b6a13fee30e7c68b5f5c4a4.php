    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="auth/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-right info">
                    <p><?php echo e($UserFullName); ?></p>
                    <a id="UserMode" href="#"><i class="fa fa-circle text-success"></i><?php echo e($user->mode($UserMode)); ?>

                    </a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">منو</li>
                
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>داشبرد</span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> داشبرد اول</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> داشبرد دوم</a></li>
                    </ul>
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>لایه های صفحه</span>
                        <span class="pull-left-container">
                                <i class="fa fa-angle-right pull-left"></i>
                                <span class="label label-primary pull-left">4</span>
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> نوار بالا</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> باکس ها</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> فیکس شده</a></li>
                        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> سایدبار</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-th"></i> <span>ویجت ها</span>
                        <span class="pull-left-container">
              <small class="label pull-left bg-green">جدید</small>
            </span>
                    </a>
                </li>

                

                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>ایمیل ها</span>
                        <span class="pull-left-container">
                          <small class="label pull-left bg-yellow">۱۲</small>
                          <small class="label pull-left bg-green">۱۶</small>
                          <small class="label pull-left bg-red">۵</small>
                        </span>
                    </a>
                </li>
                
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/auth/DashboardLayout/RightSideBar.blade.php ENDPATH**/ ?>