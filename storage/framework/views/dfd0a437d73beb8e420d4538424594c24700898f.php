<?php $__env->startSection('PageTitle', 'صفحه اصلی'); ?>


<?php $__env->startSection('content'); ?>

        
        <?php if(session('status')=='Quiz Stored'): ?>
            <script>alert("مترجم گرامی درخواست شما با موفقیت ثبت شد. در صورت کسب امتیاز لازم با شما تماس گرفته خواهد شد.")</script>
        <?php endif; ?>

        

        
        <?php echo $__env->make('vazhenegar.IndexElements.IndexPageSlides', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        
        <?php echo $__env->make('vazhenegar.IndexElements.IndexPageAboutUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        
        <?php echo $__env->make('vazhenegar.IndexElements.IndexPageOurServices', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php echo $__env->make('vazhenegar.IndexElements.IndexPageEmployment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php echo $__env->make('vazhenegar.IndexElements.IndexPageNewsLetter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

<?php $__env->stopSection(); ?> 

<?php echo $__env->make('vazhenegar.MainLayout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/index.blade.php ENDPATH**/ ?>