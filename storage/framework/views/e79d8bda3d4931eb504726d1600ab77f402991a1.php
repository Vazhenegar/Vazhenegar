<?php $__env->startSection('PageTitle', 'تماس با ما'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <h1 class="title">تماس با ما</h1>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<section class="uza-contact-area section-padding-50">
    <div class="container" dir="rtl">
        <div class="row justify-content-between">
            <!-- Contact Form -->
            <div class="col-12 col-lg-8">
                <div class="uza-contact-form mb-80">
                    <div class="contact-heading mb-50">
                        <h4>فرم ارسال پیام <br>فرم زیر را تکمیل و پیام خود را ارسال نمایید.</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" value="" class="form-control mb-30" required>
                                    <label class="form-placeholder-label" for="name">نام</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control mb-30" name="email" id="email" required>
                                    <label class="form-placeholder-label" for="email">ایمیل</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-30" name="phone" required>
                                    <label class="form-placeholder-label" for="phone">شماره تماس</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-30" name="subject" required>
                                    <label class="form-placeholder-label" for="subject">موضوع</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control mb-30" name="message" rows="8" cols="80"
                                        required></textarea>
                                    <label class="form-placeholder-label" for="message">پیام</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn uza-btn btn-2 mt-15">ارسال پیام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Single Contact Card -->
            <div class="col-12 col-lg-3">
                <div class="contact-sidebar-area mb-80">
                    <!-- Single Sidebar Area -->
                    <div class="single-contact-card mb-50">
                        <h4>واحد مدیریت</h4>
                        <div class="NumberDirectionFixer">
                            <h3>(+98) 914 849 5898</h3>
                        </div>

                        <h6>management@vazhenegar.com</h6>
                    </div>
                    <!-- Single Sidebar Area -->
                    <div class="single-contact-card mb-50">
                        <h4>واحد ترجمه</h4>
                        <div class="NumberDirectionFixer">
                            <h3>(+98) 901 284 1853</h3>
                        </div>
                        <h6>translation@vazhenegar.com</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Google Maps -->
            <div class="col-12">
                <div class="google-maps">
                    <img src="<?php echo e(asset('images/site/GoogleMap.png')); ?>" width="600" height="450">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\/views/vazhenegar/contact-us.blade.php ENDPATH**/ ?>