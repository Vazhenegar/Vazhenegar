<?php $__env->startSection('Title', 'مشخصات سفارش جدید'); ?>
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
                    <h3 class="box-title">مشخصات سفارش جدید</h3>
                </div>

                <div class="box-body">
                    <table class="table" id="NewOrderSpecs">
                        <tbody>
                        <tr>
                            <td class="pull-right">شماره سفارش: <?php echo e($Order->id); ?></td>
                            <td class="pull-left"> تاریخ ثبت: <span dir="ltr"><?php echo e($Order->RegisterDate); ?></span></td>
                        </tr>
                        <tr>
                            <td>موضوع سفارش: <?php echo e($Order->OrderSubject); ?></td>
                        </tr>
                        <tr>
                            <td class="pull-right">زمینه: <?php echo e($Order->TranslationField); ?></td>
                            <td class="pull-right">زبان مبدا: <?php echo e($Order->SourceLanguage); ?></td>
                            <td class="pull-right">زبان مقصد: <?php echo e($Order->DestLanguage); ?></td>
                        </tr>
                        <tr>
                            <td>بخش های مورد نیاز برای ترجمه:</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    $TP=$Order->TranslationParts;
                                    $TP=unserialize($TP);
                                    if ($TP){
                                    foreach ($TP as $item){
                                        echo '<i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp';
                                        echo $item.'&nbsp &nbsp';
                                    }
                                    }
                                    else{
                                        echo "<span style='color: red;'> موردی انتخاب نشده است، فقط متن اصلی ترجمه شود.</span>";
                                    }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="pull-right">تعداد کلمات:&nbsp; <?php echo e($Order->Amount); ?>  &nbsp;&nbsp;&nbsp;</td>
                            <td class="pull-right">قیمت: &nbsp;<?php echo e($Order->TotalPrice); ?></td>
                        </tr>

                        <tr>
                            <td class="pull-right"> تاریخ تحویل: <span dir="ltr"><?php echo e($Order->DeliveryDate); ?></span></td>
                            <td class="pull-left">زمان تا تحویل سفارش:
                                <?php
                                    $Time=Verta::parse($Order->DeliveryDate);
                                     if($Time->gt(Verta::now())){
                                         $days=abs($Time->diffDays());
                                         $hours=floor(abs($Time->diffMinutes())/60-($days*24));
                                         $minutes=abs($Time->diffMinutes())%60;
                                     }
                                     else{
                                         $days=0;
                                         $hours=0;
                                         $minutes=0;
                                     }
                                ?>

                                <?php echo e($days. ' روز و ' . $hours . ' ساعت و ' . $minutes . ' دقیقه'); ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="pull-right">توضیحات مشتری:</td>
                        </tr>
                        <tr>
                            <?php if($Order->Description): ?>
                                <td><?php echo nl2br($Order->Description); ?></td>
                            <?php else: ?>
                                <td><span style='color: red;'> بدون توضیحات</span></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td class="pull-left">
                                <button type="button" class="btn btn-success"><i class="fa fa-arrow-down"></i> دانلود
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <?php if($Role=='مدیر'): ?>
                        <form action="/dashboard/Order/<?php echo e($Order->id); ?>" method="post" id="NewOrderSpecAdmin">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>

                            <table class="table">
                                <hr>
                                <thead>بروز رسانی مشخصات فایل</thead>
                                <tbody>

                                
                                <tr>
                                    <td class="pull-right">
                                        تعداد کلمات: &nbsp;
                                        <input type="text" class="pull-right form-control" name="WordCount"
                                               required>
                                    </td>

                                    
                                    <td class="pull-right">
                                        قیمت: &nbsp;
                                        <input type="text" class="pull-right form-control" name="TotalPrice" required>
                                    </td>

                                    
                                    <td class="pull-left submit">
                                            <button type="submit" class="pull-left btn btn-default">بروز رسانی
                                                <i class="fa fa-arrow-circle-left"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    <?php elseif($Role=='مترجم'): ?>
                        <?php echo e('این کاربر مترجم است'); ?>

                    <?php endif; ?>
                    
                    <?php if(session('OrderStatus')=='Updated'): ?>
                        <script>alert("مشخصات سفارش با موفقیت بروز رسانی شد. در حال انتظار برای پرداخت مبلغ از سوی مشتری.")</script>
                    <?php endif; ?>
                </div>


            </div>

        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5">
            <?php echo $__env->make('vazhenegar.DashboardCalendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </section>
        <!-- left col -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardNewOrderSpecs.blade.php ENDPATH**/ ?>