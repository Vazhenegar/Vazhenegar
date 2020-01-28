<?php $__env->startSection('Title', 'ثبت سفارش جدید'); ?>

<?php
    $CurrentUser=Auth::user();
    $Role=$CurrentUser->role()->value('RoleName');
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=MenuPicker($CurrentUser);
?>

<?php $__env->startSection('content'); ?>
    
    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-7">

            <div class="box box-primary NewOrder">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">ثبت سفارش جدید</h3>
                </div>

                <div class="box-body">
                    <form action="/dashboard/Order" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="OrderSubject" placeholder="موضوع" value="<?php echo e(old('OrderSubject')); ?>" required>
                        </div>

                        
                        <div class="form-group">
                            <select class="form-control" name="source_lang"
                                    onchange="SL(this)" required>
                                <option value="">زبان مبدا</option>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e($language->id); ?>"><?php echo e($language->LanguageName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="dest_lang"
                                    onchange="DL(this)" required>
                                <option value="">زبان مقصد</option>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value=" <?php echo e($language->id); ?>"><?php echo e($language->LanguageName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        
                        <div class="form-group">
                            <select class="form-control" name="TranslationField" required>
                                <option value="">زمینه</option>
                                <?php $__currentLoopData = $translation_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($t_f->id); ?>"><?php echo e($t_f->FieldName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <hr>
                        
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">فایل سفارش (zip, rar) حداکثر 20MB</h3>
                            </div>
                            <input type="file" name="OrderFile" required>
                        </div>

                        
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">تاریخ و ساعت مورد نظر برای تحویل سفارش</h3>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text"  name="NewOrderDeliveryDate"
                                       id="NewOrderDeliveryDate" value="<?php echo e(old('NewOrderDeliveryDate')); ?>" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" dir="ltr" name="NewOrderDeliveryDateAlt" id="NewOrderDeliveryDateAlt"
                                       value="<?php echo e(old('NewOrderDeliveryDateAlt')); ?>" type="hidden"
                                       readonly/>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">مواردی که ترجمه آنها ضروری است (در غیر این صورت ترجمه نخواهد شد)</h3>
                            </div>
                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="جداول"
                                       type="checkbox"><span>جداول</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="شکل ها"
                                       type="checkbox"><span>شکل ها</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="نمودارها"
                                       type="checkbox"><span>نمودارها</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="منابع"
                                       type="checkbox"><span>منابع</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="فهرست"
                                       type="checkbox"><span>فهرست</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="زیرنویس"
                                       type="checkbox"><span>زیرنویس (اشکال، جداول، نمودارها)</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="فرمول"
                                       type="checkbox"><span>تایپ فرمول</span>
                            </label>
                            &nbsp; &nbsp;
                        </div>

                        
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">توضیحات</h3>
                            </div>
                            <textarea class="textarea" name="Description"
                                      placeholder="مواردی مانند گرایش، صفحات، و توضیحاتی که فکر می کنید به ترجمه راحتتر و بهتر مترجم کمک می کند را اینجا بنویسید"></textarea>
                        </div>
                        

                        <div class="box-footer clearfix">
                            <button type="submit" class="pull-left btn btn-default">ارسال
                                <i class="fa fa-arrow-circle-left"></i></button>
                        </div>
                        

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>


            </div>

        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5">
            <?php echo $__env->make('vazhenegar.DashboardCalendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('vazhenegar.DashboardChatBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <!-- left col -->

    </div>

    
    <?php echo $__env->make('scripts.DatePicker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.TranslationLanguages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.TranslationFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardCustomerNewOrder.blade.php ENDPATH**/ ?>