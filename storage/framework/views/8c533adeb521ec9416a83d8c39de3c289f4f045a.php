<?php $__env->startSection('PageTitle', 'ورود کاربران'); ?>
<?php $__env->startSection('content'); ?>
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row 75 align-items-end">

            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <div class="col-12 login">
        <div class="login-container">
            <div class="login-form">
                <h1>ثبت نام کاربران</h1>
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <input type="text" name="FirstName" class="input form-control" value="<?php echo e(old('FirstName')); ?>"
                               placeholder="نام" required/>
                    </div>

                    <div class="form-group">
                        <input type="text" name="LastName" class="input form-control" value="<?php echo e(old('LastName')); ?>"
                               placeholder="نام خانوادگی" required/>
                    </div>

                    <div class="form-group">
                        <input type="email" name="Email" class="input form-control" value="<?php echo e(old('Email')); ?>"
                               placeholder="ایمیل" required/>
                    </div>

                    <div class="form-group">
                        <input type="password" name="Password" class="form-control input" placeholder="رمز عبور"
                               required/>
                    </div>

                    <div class="form-group">
                        <input type="password" name="Password_confirmation" class="form-control input"
                               placeholder="تایید رمز عبور"
                               required/>
                    </div>

                    <div class="form-group">
                        <input type="number" name="FixNumber" class="form-control input" value="<?php echo e(old('FixNumber')); ?>"
                               placeholder="تلفن ثابت"
                               required/>
                    </div>

                    <div class="form-group">
                        <input type="number" name="MobileNumber" class="form-control input" value="<?php echo e(old('MobileNumber')); ?>"
                               placeholder="تلفن همراه"
                               required/>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn uza-btn btn-2 loginBtnSubmit">ثبت نام</button>
                    </div>

                    <?php if($errors->any()): ?>
                        <div class="login-error alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\auth\register.blade.php ENDPATH**/ ?>