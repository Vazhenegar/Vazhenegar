<?php $__env->startSection('nav'); ?>
    ##parent-placeholder-fea877d4f0f1699da0f936f6f27d8cea307ef5e1##
        <a href="/faq">سوالات متداول</a>
        &nbsp; &nbsp;
        <a href="/faqAdmin">مدیریت بخش سوالات متداول </a>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make(file_exists(resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php'))
                    ? resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php')
                    : 'faq::layout.StaticPagesLayout'
        , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\faqNav.blade.php ENDPATH**/ ?>