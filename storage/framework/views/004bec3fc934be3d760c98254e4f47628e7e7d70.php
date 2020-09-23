<?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php switch($Order->status_id):
    case (4): ?>

    <p class="pull-right">
        فایل را دانلود کرده و در صورت توانایی انجام سفارش، کلید قبول سفارش را فشار دهید.
    </p>

    <div class="pull-left">

        <a onclick="event.preventDefault();
            document.getElementById('AcceptOrder').submit();">

            <button type="button" class="btn btn-primary"><i class="fa fa-check"></i>
                قبول سفارش
            </button>
        </a>
        <form id="AcceptOrder" action="<?php echo e(route('AcceptOrderByTranslator',[$Order->id])); ?>" method="POST"
              style="display: none;">
            <?php echo csrf_field(); ?>
        </form>

    </div>
    <?php break; ?>

    <?php case (5): ?>

    <?php if($Order->ResponsibleUserId==DashboardCurrentUser::$id): ?>
        <p class="SuccessBackground">
            سفارش برای شما ثبت شده است. لطفا به زمان تحویل سفارش توجه ویژه داشته و در تحویل بموقع کوشا باشید.
        </p>
        <br>
        <hr>
        <p>
            پس از تکمیل ترجمه، فایل آن را بصورت زیپ از قسمت زیر ارسال نمایید:
        </p>
        <br>
        <div>
            <form action="<?php echo e(route('UploadTranslation',[$Order->id])); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <?php if($errors->has('TranslatedOrder')): ?>
                    <div class="wrong-field form-group">
                        <?php else: ?>
                            <div class="form-group">
                                <?php endif; ?>
                                <input type="file" name="TranslatedOrder" required>

                            </div>
                            <button type="submit"><i class="fa fa-upload"></i>آپلود فایل</button>

                            <div>
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>

            </form>
        </div>
    <?php endif; ?>

    <?php break; ?>
<?php endswitch; ?>
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardElements/Translator/DashboardNewOrderSpecsTranslator.blade.php ENDPATH**/ ?>