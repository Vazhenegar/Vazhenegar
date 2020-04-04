<?php $__env->startSection('nav'); ?>
    ##parent-placeholder-fea877d4f0f1699da0f936f6f27d8cea307ef5e1##
        <a href="/contact-us">تماس با ما</a>
        &nbsp; &nbsp;
        <a href="/contact-usAdmin">مدیریت بخش تماس با ما</a>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make(file_exists(resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php'))
? resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php')
: 'ContactUs::layout.StaticPagesLayout'
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\contact-usNav.blade.php ENDPATH**/ ?>