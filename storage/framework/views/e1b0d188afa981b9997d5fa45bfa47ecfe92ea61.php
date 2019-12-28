<?php $__env->startSection('PageTitle', 'ورود کاربران'); ?>

<?php $__env->startSection('content'); ?>

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">

            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h1>ورود کاربران</h1>
                <form>
                    <div class="form-group">

                        <input type="text" class="form-control mb-30" name="username" required>
                        <label class="form-placeholder-label" for="username"> ایمیل یا کد کاربری</label>
                    </div>
                    <div class="form-group mb-30">
                        <input type="password" class="form-control input " placeholder="رمز عبور" required/>
                    </div>

                    <div class="form-group text-center">
                        <a href="/UserRegister"><button  type="button" class="btn uza-btn btn-2 loginBtnSubmit">ثبت نام </button></a>
                        <button type="submit" class="btn uza-btn btn-2 loginBtnSubmit">ورود به ناحیه کاربری </button>



                    </div>
                    <div class="form-group display-block">
                        <a href="#" class="ForgetPwd">رمز عبور را فراموش کرده ام</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/login.blade.php ENDPATH**/ ?>