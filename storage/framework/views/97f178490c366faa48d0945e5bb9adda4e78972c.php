<section class="uza-why-choose-us-area" dir="rtl">
    <div class="container">
        <div class="row align-items-center">
            <!-- Choose Us Content -->
            <div class="col-lg-12 ">
                <div class="choose-us-content">
                    <?php $__currentLoopData = $TOS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="static-text-title"><?php echo e($tos->TosTitle); ?></p>
                        <p class="static-text-content"><?php echo e($tos->TosContent); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\TermsOfService\BodySection.blade.php ENDPATH**/ ?>