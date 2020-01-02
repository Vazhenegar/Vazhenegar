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
                <h1>ورود کاربران</h1>
                <form method="POST" action="<?php echo e(route('login')); ?>>
                    <div class=" form-group
                ">
                <input type="email" name="email" class="input form-control" value="<?php echo e(old('email')); ?>"
                       placeholder="ایمیل" required/>

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong>آدرس ایمیل اشتباه است</strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group mb-30">
                <input type="password"  name="password" class="form-control input " placeholder="رمز عبور" required/>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong>رمز عبور اشتباه است</strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn uza-btn btn-2 loginBtnSubmit">ورود به ناحیه کاربری</button>
                <a href="<?php echo e(route('register')); ?>">
                    <button type="button" class="btn uza-btn btn-2 loginBtnSubmit">ثبت نام</button>
                </a>
            </div>

            <div class="form-group ForgetPwd">
                <?php if(Route::has('password.request')): ?>
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                        رمز عبور را فراموش کرده ام
                    </a>
                <?php endif; ?>
            </div>
            </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\auth\login.blade.php ENDPATH**/ ?>