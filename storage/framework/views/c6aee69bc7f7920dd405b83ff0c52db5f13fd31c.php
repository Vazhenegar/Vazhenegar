<section class="Faq-area section-padding-80">
    <div class="container" dir="rtl">
        <div class="row justify-content-between">
            <!-- Contact Form -->
            <div class="col-12 col-lg-8">
            
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Border Bottom -->
                    <div class="border-line"></div>
                    <br>
                    <p class="static-text-title"><?php echo e($faq->q); ?></p>
                    <p class="static-text-content"> <?php echo e($faq->a); ?></p>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\FaqElements\BodySection.blade.php ENDPATH**/ ?>