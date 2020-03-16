<?php $__env->startSection('PageTitle', 'آزمون آنلاین'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('scripts.QuizTimer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12 mb-15" dir="rtl">
                    <h1 class="title">آزمون آنلاین</h1>
                    <h3 class="description">متن زیر را تا قبل از اتمام زمان، با دقت ترجمه کنید و در کادر پایین
                        بنویسید.</h3>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo e(asset('images/core-img/curve-5.png')); ?>" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** ‏Timer Goes Here ***** -->
    <div class="container col-12 mb-15" dir="ltr">
        <div class="row">
            <div class="timer">
                <span class="col-2" id="cd-min"></span>
                <span>:</span>
                <span class="col-2" id="cd-sec"></span>
                <span class="col-2" id="cd-sec">زمان باقی مانده </span>
            </div>
        </div>
    </div>
    <!-- ***** Timer Area End ***** -->
    <!-- ***** Quiz Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Quiz Content -->
                <div class="col-12">
                    <form action="/quiz" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                        <textarea class="form-control mb-30 quizText" name="QuizText" rows="10" disabled>
                            <?php $__currentLoopData = $Contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($Content); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </textarea>
                        </div>


                        <div class="col-12" dir="rtl">
                            <div class="form-group">
                                <textarea class="form-control mb-30 quiz-answer" name="QuizAnswer" rows="10" required></textarea>
                            </div>
                        </div>

                        <div class="col-12 mb-30">
                            <button type="submit" class="quiz-submit btn uza-btn btn-2 mt-15">ارسال</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Quiz Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.layout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/TranslatorQuiz.blade.php ENDPATH**/ ?>